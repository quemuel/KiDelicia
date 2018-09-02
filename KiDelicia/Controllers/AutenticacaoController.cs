using KiDelicia.Contexts;
using KiDelicia.Models;
using KiDelicia.Utils;
using KiDelicia.ViewModel;
using System;
using System.Linq;
using System.Security.Claims;
using System.Web;
using System.Web.Mvc;

namespace KiDelicia.Controllers
{
    public class AutenticacaoController : Controller
    {
        private EFContext db = new EFContext();
        // GET: Autenticacao
        public ActionResult Cadastrar()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Cadastrar(CadastroUsuarioViewModel cadastroUsuarioViewModel)
        {
            if (!ModelState.IsValid)
            {
                return View(cadastroUsuarioViewModel);
            }

            if (db.Usuarios.Count(u => u.Login == cadastroUsuarioViewModel.Login) > 0)
            {
                ModelState.AddModelError("Login", "Esse login já está em uso");
                return View(cadastroUsuarioViewModel);

            }

            Usuario novoUsuario = new Usuario
            {
                Nome = cadastroUsuarioViewModel.Nome,
                Login = cadastroUsuarioViewModel.Login,
                Senha = Hash.GeraHash(cadastroUsuarioViewModel.Senha)
            };

            db.Usuarios.Add(novoUsuario);
            db.SaveChanges();

            TempData["Mensagem"] = "Cadastro ralizado com sucesso. Efetue login";
            return RedirectToAction("Index","Home");
        }



        public ActionResult Login(string ReturnUrl)
        {
            var viewmodel = new LoginViewModel
            {
                UrlRetorno = ReturnUrl
            };

            return View(viewmodel);
        }

        [HttpPost]
        public ActionResult Login(LoginViewModel  loginviewModel)
        {
            if (!ModelState.IsValid)
            {
                return View(loginviewModel);
            }

            var usuario = db.Usuarios.FirstOrDefault(u => u.Login == loginviewModel.Login);

            if (usuario == null)
            {
                ModelState.AddModelError("Login", "Login incorreto");
                return View(loginviewModel);
            }

            if(usuario.Senha!= Hash.GeraHash(loginviewModel.Senha))
            {
                ModelState.AddModelError("Senha", "Senha incorreta");
                return View(loginviewModel);
            }

            var identity = new ClaimsIdentity(new[]
            {
                new Claim(ClaimTypes.Name,usuario.Nome),
                new Claim("Login", usuario.Login)
            }, "ApplicationCookie");

            Request.GetOwinContext().Authentication.SignIn(identity);

            if (!String.IsNullOrWhiteSpace(loginviewModel.UrlRetorno) || Url.IsLocalUrl(loginviewModel.UrlRetorno))

                return Redirect(loginviewModel.UrlRetorno);
            else
                return RedirectToAction("Index", "Home");
        }

        public ActionResult Logout()
        {
            Request.GetOwinContext().Authentication.SignOut("ApplicationCookie");
            return RedirectToAction("Index", "Home");

        }
    }
}