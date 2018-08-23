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
            BaixaMes baixaMes = db.BaixaMeses.Include(b => b.Cliente).Include(b => b.Empresa).First(b => b.BaixaMesId == id);
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
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeEmpresa");
            return View();
        }

        // POST: BaixaMes/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "BaixaMesId,ValorMes,DataMesReferencia,DataCadastro,ClienteId,EmpresaId,FlagCliente")] BaixaMes baixaMes)
        {
            if (ModelState.IsValid)
            {
                if (baixaMes.FlagCliente)
                {
                    baixaMes.EmpresaId = null;
                }
                else
                {
                    baixaMes.ClienteId = null;
                }
                db.BaixaMeses.Add(baixaMes);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.ClienteId = new SelectList(db.Clientes, "ClienteId", "NomeCliente", baixaMes.ClienteId);
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeEmpresa", baixaMes.EmpresaId);
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
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeEmpresa", baixaMes.EmpresaId);
            return View(baixaMes);
        }

        // POST: BaixaMes/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "BaixaMesId,ValorMes,DataMesReferencia,DataCadastro,ClienteId,EmpresaId,FlagCliente")] BaixaMes baixaMes)
        {
            if (ModelState.IsValid)
            {
                if (baixaMes.FlagCliente)
                {
                    baixaMes.EmpresaId = null;
                }
                else
                {
                    baixaMes.ClienteId = null;
                }
                db.Entry(baixaMes).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.ClienteId = new SelectList(db.Clientes, "ClienteId", "NomeCliente", baixaMes.ClienteId);
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeEmpresa", baixaMes.EmpresaId);
            return View(baixaMes);
        }

        // GET: BaixaMes/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            BaixaMes baixaMes = db.BaixaMeses.Include(b => b.Cliente).Include(b => b.Empresa).First(b => b.BaixaMesId == id);
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

        // GET: BaixaMes/Extrato
        public ActionResult Extrato()
        {


            //"SELECT
            //        cc.ClienteId, 
            //  FORMAT(cc.DataConsumo, 'yyyyMM') mes_ano_consumo, 
            //  FORMAT(bm.DataMesReferencia, 'yyyyMM') mes_ano_baixa, 
            //  SUM(cc.ValorConsumo) valorGastou,		
            //  bm.ValorMes ValorPagou
            //  FROM[ConsumoComanda] cc
            // JOIN[BaixaMes] bm on bm.ClienteId = cc.ClienteId AND FORMAT(cc.DataConsumo, 'yyyyMM') = FORMAT(bm.DataMesReferencia, 'yyyyMM')
            //  GROUP BY cc.ClienteId, FORMAT(cc.DataConsumo, 'yyyyMM'), FORMAT(bm.DataMesReferencia, 'yyyyMM'), bm.ValorMes"

            // var query = db.ConsumoComandas.
            //     Join(db.BaixaMeses,
            //        baixaMeses => baixaMeses.ClienteId,
            //        consumoComandas => consumoComandas.ClienteId,
            //        (ConsumoComandas, BaixaMeses) => new { ConsumoComandas.ClienteId, ConsumoComandas.DataConsumo, BaixaMeses.DataMesReferencia, ConsumoComandas.Sum(c => c.), BaixaMeses.ValorMes}
            //    )
            //    .GroupBy(consumoComandas => consumoComandas.ClienteId, consumoComandas => consumoComandas.DataConsumo);

            

            //int total = query.ToList().Count();
            //query.ToList().ForEach(r =>
            //{
            //    Console.WriteLine(r);
            //});

            //db.ConsumoComandas.
            //    Join(
            //        db.BaixaMeses,
            //        bm => bm.ClienteId,
            //        cc => cc.ClienteId,
            //        (ConsumoComandas, BaixaMeses) => new { ConsumoComandas, BaixaMeses }
            //    ).
            //    Where(x => x.ConsumoComandas.ClienteId == 1)
            //    .GroupBy();

            //.ToList().ForEach(r => {
            //    Console.WriteLine(r.BaixaMeses.DataMesReferencia);
            //    Console.WriteLine(r.BaixaMeses.ValorMes);
            //    Console.WriteLine(r.ConsumoComandas.DataConsumo);
            //    Console.WriteLine(r.ConsumoComandas.ValorConsumo);
            //});


            //          GroupBy(x => x.)

            //.Select(m => new { User = m.Key, TotalPoints = m.Sum(v => v.Points) })
            //.OrderByDescending(m => m.TotalPoints);

            //          .Select(m => new { User = m.Key, TotalPoints = m.Sum(v => v.Points) })

            ViewBag.ClienteId = new SelectList(db.Clientes, "ClienteId", "NomeCliente");
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeEmpresa");
            return View();
        }

        // POST: BaixaMes/Extrato
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Extrato([Bind(Include = "DataMesReferenciaInicial,DataMesReferenciaFinal, ClienteId, EmpresaId, FlagCliente")] BaixaMes baixaMesPost)
        {

            //List<Extrato> dadosExtrato
            dynamic dadosExtrato = new List<Extrato>();
            if (baixaMesPost.FlagCliente)
            {               
                var extrato = from consumoComanda in db.ConsumoComandas
                    join baixaMes in db.BaixaMeses on new
                    {
                        ClienteId = consumoComanda.ClienteId,
                        mes = consumoComanda.DataConsumo.Month,
                        ano = consumoComanda.DataConsumo.Year,
                    } equals
                    new
                    {
                        ClienteId = baixaMes.ClienteId,
                        mes = baixaMes.DataMesReferencia.Month,
                        ano = baixaMes.DataMesReferencia.Year,
                    }
                    where consumoComanda.ClienteId == baixaMesPost.ClienteId && consumoComanda.DataConsumo.Month >= baixaMesPost.DataMesReferenciaInicial.Month && consumoComanda.DataConsumo.Year >= baixaMesPost.DataMesReferenciaInicial.Year && consumoComanda.DataConsumo.Month <= baixaMesPost.DataMesReferenciaFinal.Month && consumoComanda.DataConsumo.Year <= baixaMesPost.DataMesReferenciaFinal.Year
                              let dtConsumo = consumoComanda.DataConsumo
                    let dtMesReferencia = baixaMes.DataMesReferencia
                    group consumoComanda by new
                    {
                        ClienteId = consumoComanda.ClienteId,
                        MesAnoConsumo = "1" + "/" + dtConsumo.Month + "/" + dtConsumo.Year,
                        ValorMes = baixaMes.ValorMes
                    } into g
                    orderby g.Key.MesAnoConsumo descending
                    select new
                    {
                        ClienteId = g.Key.ClienteId,
                        DataMesReferencia = g.Key.MesAnoConsumo,
                        ValorGasto = g.Sum(x => x.ValorConsumo),
                        ValorPago = g.Key.ValorMes
                    };

                extrato.ToList().ForEach(x => {
                    Extrato e = new Extrato();
                    e.ClienteId = x.ClienteId;
                    e.Cliente = db.Clientes.Find(x.ClienteId);
                    e.DataMesReferencia = Convert.ToDateTime(x.DataMesReferencia);
                    e.ValorGasto = x.ValorGasto;
                    e.ValorPago = x.ValorPago;
                    dadosExtrato.Add(e);
                });
            } else
            {
                var extrato = from consumoComanda in db.ConsumoComandas
                    join baixaMes in db.BaixaMeses on new
                    {
                        EmpresaId = consumoComanda.EmpresaId,
                        mes = consumoComanda.DataConsumo.Month,
                        ano = consumoComanda.DataConsumo.Year,
                    } equals
                    new
                    {
                        EmpresaId = baixaMes.EmpresaId,
                        mes = baixaMes.DataMesReferencia.Month,
                        ano = baixaMes.DataMesReferencia.Year,
                    }
                    where consumoComanda.EmpresaId == baixaMesPost.EmpresaId && consumoComanda.DataConsumo.Month >= baixaMesPost.DataMesReferenciaInicial.Month && consumoComanda.DataConsumo.Year >= baixaMesPost.DataMesReferenciaInicial.Year && consumoComanda.DataConsumo.Month <= baixaMesPost.DataMesReferenciaFinal.Month && consumoComanda.DataConsumo.Year <= baixaMesPost.DataMesReferenciaFinal.Year
                              let dtConsumo = consumoComanda.DataConsumo
                    let dtMesReferencia = baixaMes.DataMesReferencia
                    group consumoComanda by new
                    {
                        EmpresaId = consumoComanda.EmpresaId,
                        MesAnoConsumo = "1" + "/" + dtConsumo.Month + "/" + dtConsumo.Year,
                        ValorMes = baixaMes.ValorMes
                    } into g
                    orderby g.Key.MesAnoConsumo descending
                    select new
                    {
                        EmpresaId = g.Key.EmpresaId,
                        DataMesReferencia = g.Key.MesAnoConsumo,
                        ValorGasto = g.Sum(x => x.ValorConsumo),
                        ValorPago = g.Key.ValorMes
                    };

                extrato.ToList().ForEach(x => {
                    Extrato e = new Extrato();
                    e.EmpresaId = x.EmpresaId;
                    e.Empresa = db.Empresas.Find(x.EmpresaId);
                    e.DataMesReferencia = Convert.ToDateTime(x.DataMesReferencia);
                    e.ValorGasto = x.ValorGasto;
                    e.ValorPago = x.ValorPago;
                    dadosExtrato.Add(e);
                });
            }

            ViewBag.extrato = dadosExtrato;

            ViewBag.ClienteId = new SelectList(db.Clientes, "ClienteId", "NomeCliente", baixaMesPost.ClienteId);
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeEmpresa", baixaMesPost.EmpresaId);
            return View(baixaMesPost);
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
