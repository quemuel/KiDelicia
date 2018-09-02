using KiDelicia.Contexts;
using KiDelicia.Utils;
using KiDelicia.ViewModels;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Claims;
using System.Web;
using System.Web.Mvc;

namespace KiDelicia.Controllers
{
    public class PerfilController : Controller
    {
        private EFContext db = new EFContext();

        // GET: Perfil
        [Authorize]
        public ActionResult AlterarSenha()
        {
            return View();
        }

        [Authorize]
        [HttpPost]
        public ActionResult AlterarSenha(AlterarSenhaViewModel alterarSenhaViewModel )
        {

            if (!ModelState.IsValid)
            {
                return View();
            }
            var identity = User.Identity as ClaimsIdentity;

            var login = identity.Claims.FirstOrDefault(c => c.Type == "Login").Value;

            var usuario = db.Usuarios.FirstOrDefault(u => u.Login == login);

            if(Hash.GeraHash(alterarSenhaViewModel.SenhaAtual) != usuario.Senha)
            {
                ModelState.AddModelError("SenhaAtual", "Senha incorreta");
                return View();

            }

            usuario.Senha = Hash.GeraHash(alterarSenhaViewModel.NovaSenha);
            db.Entry(usuario).State = System.Data.Entity.EntityState.Modified;
            db.SaveChanges();

            TempData["Mensagem"] = "Senha alterada com sucesso!";

            return RedirectToAction("Index", "Home");


        }
    }
}