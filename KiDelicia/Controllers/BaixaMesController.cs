using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using KiDelicia.Contexts;
using KiDelicia.Models;

namespace KiDelicia.Controllers
{
    public class BaixaMesController : Controller
    {
        private EFContext db = new EFContext();

        // GET: BaixaMes
        public ActionResult Index()
        {
            var baixaMeses = db.BaixaMeses.Include(b => b.Cliente).Include(b => b.Empresa);
            return View(baixaMeses.ToList());
        }

        // GET: BaixaMes/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            BaixaMes baixaMes = db.BaixaMeses.Find(id);
            if (baixaMes == null)
            {
                return HttpNotFound();
            }
            return View(baixaMes);
        }

        // GET: BaixaMes/Create
        public ActionResult Create()
        {
            ViewBag.ClienteId = new SelectList(db.Clientes, "ClienteId", "NomeCliente");
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeFantasia");
            return View();
        }

        // POST: BaixaMes/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "BaixaMesId,ValorMes,DataMesReferencia,DataCadastro,ClienteId,EmpresaId")] BaixaMes baixaMes)
        {
            if (ModelState.IsValid)
            {
                db.BaixaMeses.Add(baixaMes);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.ClienteId = new SelectList(db.Clientes, "ClienteId", "NomeCliente", baixaMes.ClienteId);
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeFantasia", baixaMes.EmpresaId);
            return View(baixaMes);
        }

        // GET: BaixaMes/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            BaixaMes baixaMes = db.BaixaMeses.Find(id);
            if (baixaMes == null)
            {
                return HttpNotFound();
            }
            ViewBag.ClienteId = new SelectList(db.Clientes, "ClienteId", "NomeCliente", baixaMes.ClienteId);
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeFantasia", baixaMes.EmpresaId);
            return View(baixaMes);
        }

        // POST: BaixaMes/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "BaixaMesId,ValorMes,DataMesReferencia,DataCadastro,ClienteId,EmpresaId")] BaixaMes baixaMes)
        {
            if (ModelState.IsValid)
            {
                db.Entry(baixaMes).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.ClienteId = new SelectList(db.Clientes, "ClienteId", "NomeCliente", baixaMes.ClienteId);
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeFantasia", baixaMes.EmpresaId);
            return View(baixaMes);
        }

        // GET: BaixaMes/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            BaixaMes baixaMes = db.BaixaMeses.Find(id);
            if (baixaMes == null)
            {
                return HttpNotFound();
            }
            return View(baixaMes);
        }

        // POST: BaixaMes/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            BaixaMes baixaMes = db.BaixaMeses.Find(id);
            db.BaixaMeses.Remove(baixaMes);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
