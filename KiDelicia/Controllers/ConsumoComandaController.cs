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
    public class ConsumoComandaController : Controller
    {
        private EFContext db = new EFContext();

        // GET: ConsumoComanda
        public ActionResult Index()
        {
            return View(db.ConsumoComandas.ToList());
        }

        // GET: ConsumoComanda/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            ConsumoComanda consumoComanda = db.ConsumoComandas.Find(id);
            if (consumoComanda == null)
            {
                return HttpNotFound();
            }
            return View(consumoComanda);
        }

        // GET: ConsumoComanda/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: ConsumoComanda/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "IdConsumoComanda,ValorConsumo,dataHoraLancamento")] ConsumoComanda consumoComanda)
        {
            if (ModelState.IsValid)
            {
                db.ConsumoComandas.Add(consumoComanda);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(consumoComanda);
        }

        // GET: ConsumoComanda/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            ConsumoComanda consumoComanda = db.ConsumoComandas.Find(id);
            if (consumoComanda == null)
            {
                return HttpNotFound();
            }
            return View(consumoComanda);
        }

        // POST: ConsumoComanda/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "IdConsumoComanda,ValorConsumo,dataHoraLancamento")] ConsumoComanda consumoComanda)
        {
            if (ModelState.IsValid)
            {
                db.Entry(consumoComanda).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(consumoComanda);
        }

        // GET: ConsumoComanda/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            ConsumoComanda consumoComanda = db.ConsumoComandas.Find(id);
            if (consumoComanda == null)
            {
                return HttpNotFound();
            }
            return View(consumoComanda);
        }

        // POST: ConsumoComanda/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            ConsumoComanda consumoComanda = db.ConsumoComandas.Find(id);
            db.ConsumoComandas.Remove(consumoComanda);
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
