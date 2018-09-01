using KiDelicia.Contexts;
using KiDelicia.Utils;
using KiDelicia.ViewModel;
using System;
using System.Collections.Generic;
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


        public ActionResult Login(string ReturnUrl)
        {
            var viewmodel = new LoginViewModel
            {
                UrlRetorno = ReturnUrl
            };

            return View(viewmodel);
        }

        [HttpPost]
        public ActionResult Login(LoginViewModel  loginViewModel)
        {
            if (!ModelState.IsValid)
            {
                return View(loginViewModel);
            }

            var usuario = db.Usuarios.FirstOrDefault(u => u.Login == loginViewModel.Login);

            if (usuario == null)
            {
                ModelState.AddModelError("Login", "Login incorreto");
                return View(loginViewModel);
            }

            if(usuario.Senha!= Hash.GeraHash(loginViewModel.Senha))
            {
                ModelState.AddModelError("Senha", "Senha incorreta");
                return View(loginViewModel);
            }

            var identity = new ClaimsIdentity(new[]
            {
                new Claim(ClaimTypes.Name,usuario.Nome),
                new Claim("Login", usuario.Login)
            }, "ApplicationCookie");

            Request.GetOwinContext().Authentication.SignIn(identity);

            if (!String.IsNullOrWhiteSpace(loginViewModel.UrlRetorno) || Url.IsLocalUrl(loginViewModel.UrlRetorno))

                return Redirect(loginViewModel.UrlRetorno);
            else
                return RedirectToAction("Index", "Painel");
        }
    }
}