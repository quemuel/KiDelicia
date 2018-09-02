using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace KiDelicia.Controllers
{
    public class PerfilController : Controller
    {
        // GET: Perfil
        [Authorize]
        public ActionResult AlterarSenha()
        {
            return View();
        }
    }
}