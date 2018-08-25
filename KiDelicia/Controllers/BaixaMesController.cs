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
            ViewBag.ClienteId = new SelectList(db.Clientes, "ClienteId", "NomeCliente");
            ViewBag.EmpresaId = new SelectList(db.Empresas, "EmpresaId", "NomeEmpresa");
            return View();
        }

        // POST: BaixaMes/Extrato
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Extrato([Bind(Include = "DataMesReferenciaInicial,DataMesReferenciaFinal, ClienteId, EmpresaId, FlagCliente")] BaixaMes baixaMesPost)
        {
            
            dynamic dadosExtrato = new List<Extrato>();
            if (baixaMesPost.FlagCliente)
            {
                //ANULANDO EmpresaId POIS A BUSCA EH POR CLIENTE
                baixaMesPost.EmpresaId = null;

                //SQL SERVER
                //SELECT
                //    consumoComanda.ClienteId, 
                //    DATENAME(mm, consumoComanda.DataConsumo) + '/' + DATENAME(yyyy, consumoComanda.DataConsumo) as DataMesReferencia, 
                //    SUM(consumoComanda.ValorConsumo) as ValorGasto,		
                //    baixaMes.ValorMes as ValorPago
                //FROM ConsumoComanda consumoComanda
                //JOIN BaixaMes baixaMes on baixaMes.ClienteId = consumoComanda.ClienteId AND DATENAME(mm, consumoComanda.DataConsumo) = DATENAME(mm, baixaMes.DataMesReferencia) AND DATENAME(yyyy, consumoComanda.DataConsumo) = DATENAME(yyyy, baixaMes.DataMesReferencia)
                //GROUP BY consumoComanda.ClienteId, baixaMes.ValorMes, (DATENAME(mm, consumoComanda.DataConsumo) + '/' + DATENAME(yyyy, consumoComanda.DataConsumo))

                //INSTRUCOES LINQ TO OBJECT
                var extrato = db.ConsumoComandas
                .Join(
                    db.BaixaMeses,
                    consumoComanda => new { consumoComanda.ClienteId, consumoComanda.DataConsumo.Month, consumoComanda.DataConsumo.Year },
                    baixaMes => new { baixaMes.ClienteId, baixaMes.DataMesReferencia.Month, baixaMes.DataMesReferencia.Year },
                    (consumoComanda, baixaMes) => new {
                        consumoComanda.ClienteId,
                        consumoComanda.DataConsumo,
                        consumoComanda.ValorConsumo,
                        baixaMes.ValorMes,
                        baixaMes.DataMesReferencia
                    }
                )
                .Where(pe => pe.ClienteId == baixaMesPost.ClienteId)
                //BETWEEN COM DataConsumo ENTRE O DataMesReferenciaInicial E O DataMesReferenciaFinal COM O 
                .Where(pe => pe.DataConsumo.Month >= baixaMesPost.DataMesReferenciaInicial.Month && pe.DataConsumo.Month <= baixaMesPost.DataMesReferenciaFinal.Month)
                .Where(pe => pe.DataConsumo.Year >= baixaMesPost.DataMesReferenciaInicial.Year && pe.DataConsumo.Year <= baixaMesPost.DataMesReferenciaFinal.Year)
                .GroupBy(pe => new
                {
                    ClienteId = pe.ClienteId,
                    MesAnoConsumo = pe.DataConsumo.Month + "/" + pe.DataConsumo.Year,
                    ValorMes = pe.ValorMes
                })
                .OrderByDescending(pe => pe.Key.MesAnoConsumo)
                .Select(pe => new
                {
                    pe.Key.ClienteId,
                    DataMesReferencia = pe.Key.MesAnoConsumo,
                    ValorGasto = pe.Sum(x => x.ValorConsumo),
                    ValorPago = pe.Key.ValorMes
                });


                //INSTRUCOES LINQ TO SQL
                //var extrato =
                //    from consumoComanda in db.ConsumoComandas
                //    join baixaMes in db.BaixaMeses on new
                //    {
                //        ClienteId = consumoComanda.ClienteId,
                //        mes = consumoComanda.DataConsumo.Month,
                //        ano = consumoComanda.DataConsumo.Year,
                //    } equals
                //    new
                //    {
                //        ClienteId = baixaMes.ClienteId,
                //        mes = baixaMes.DataMesReferencia.Month,
                //        ano = baixaMes.DataMesReferencia.Year,
                //    }
                //    where consumoComanda.ClienteId == baixaMesPost.ClienteId
                //    where consumoComanda.DataConsumo.Month >= baixaMesPost.DataMesReferenciaInicial.Month
                //    where consumoComanda.DataConsumo.Month <= baixaMesPost.DataMesReferenciaFinal.Month
                //    where consumoComanda.DataConsumo.Year >= baixaMesPost.DataMesReferenciaInicial.Year
                //    where consumoComanda.DataConsumo.Year <= baixaMesPost.DataMesReferenciaFinal.Year
                //    let dtConsumo = consumoComanda.DataConsumo
                //    let dtMesReferencia = baixaMes.DataMesReferencia
                //    group consumoComanda by new
                //    {
                //        ClienteId = consumoComanda.ClienteId,
                //        MesAnoConsumo = dtConsumo.Month + "/" + dtConsumo.Year,
                //        ValorMes = baixaMes.ValorMes
                //    } into g
                //    orderby g.Key.MesAnoConsumo descending
                //    select new
                //    {
                //        ClienteId = g.Key.ClienteId,
                //        DataMesReferencia = g.Key.MesAnoConsumo,
                //        ValorGasto = g.Sum(x => x.ValorConsumo),
                //        ValorPago = g.Key.ValorMes
                //    };

                extrato.ToList().ForEach(x =>
                {
                    Extrato e = new Extrato();
                    e.ClienteId = x.ClienteId;
                    e.Cliente = db.Clientes.Find(x.ClienteId);
                    e.DataMesReferencia = Convert.ToDateTime("1/" + x.DataMesReferencia);
                    e.ValorGasto = x.ValorGasto;
                    e.ValorPago = x.ValorPago;
                    dadosExtrato.Add(e);
                });
            } else
            {
                //ANULANDO ClienteId POIS A BUSCA EH POR EMPRESA
                baixaMesPost.ClienteId = null;

                //INSTRUCOES LINQ TO OBJECT
                var extrato = db.ConsumoComandas
                //JOIN COM BaixaMeses
                .Join(
                    db.BaixaMeses,
                    consumoComanda => new { consumoComanda.EmpresaId, consumoComanda.DataConsumo.Month, consumoComanda.DataConsumo.Year },
                    baixaMes => new { baixaMes.EmpresaId, baixaMes.DataMesReferencia.Month, baixaMes.DataMesReferencia.Year },
                    (consumoComanda, baixaMes) => new { consumoComanda, baixaMes }
                )
                .Where(x => x.consumoComanda.EmpresaId == baixaMesPost.EmpresaId)
                //BETWEEN COM DataConsumo ENTRE O DataMesReferenciaInicial E O DataMesReferenciaFinal COM O 
                .Where(x => x.consumoComanda.DataConsumo.Month >= baixaMesPost.DataMesReferenciaInicial.Month)
                .Where(x => x.consumoComanda.DataConsumo.Month <= baixaMesPost.DataMesReferenciaFinal.Month)
                .Where(x => x.consumoComanda.DataConsumo.Year >= baixaMesPost.DataMesReferenciaInicial.Year)
                .Where(x => x.consumoComanda.DataConsumo.Year <= baixaMesPost.DataMesReferenciaFinal.Year)
                .GroupBy(x => new
                {
                    EmpresaId = x.consumoComanda.EmpresaId,
                    //GROUPBY DO MESANO 
                    MesAnoConsumo = x.consumoComanda.DataConsumo.Month + "/" + x.consumoComanda.DataConsumo.Year,
                    ValorMes = x.baixaMes.ValorMes
                })
                .OrderByDescending(x => x.Key.MesAnoConsumo)
                .Select(x => new
                {
                    x.Key.EmpresaId,
                    DataMesReferencia = x.Key.MesAnoConsumo,
                    ValorGasto = x.Sum(y => y.consumoComanda.ValorConsumo),
                    ValorPago = x.Key.ValorMes
                });

                //INSTRUCOES LINQ TO SQL
                //var extrato = 
                //    from consumoComanda in db.ConsumoComandas
                //    join baixaMes in db.BaixaMeses on new
                //    {
                //        EmpresaId = consumoComanda.EmpresaId,
                //        mes = consumoComanda.DataConsumo.Month,
                //        ano = consumoComanda.DataConsumo.Year,
                //    } equals
                //    new
                //    {
                //        EmpresaId = baixaMes.EmpresaId,
                //        mes = baixaMes.DataMesReferencia.Month,
                //        ano = baixaMes.DataMesReferencia.Year,
                //    }
                //    where consumoComanda.EmpresaId == baixaMesPost.EmpresaId
                //    where consumoComanda.DataConsumo.Month >= baixaMesPost.DataMesReferenciaInicial.Month
                //    where consumoComanda.DataConsumo.Month <= baixaMesPost.DataMesReferenciaFinal.Month
                //    where consumoComanda.DataConsumo.Year >= baixaMesPost.DataMesReferenciaInicial.Year
                //    where consumoComanda.DataConsumo.Year <= baixaMesPost.DataMesReferenciaFinal.Year
                //    let dtConsumo = consumoComanda.DataConsumo
                //    let dtMesReferencia = baixaMes.DataMesReferencia
                //    group consumoComanda by new
                //    {
                //        EmpresaId = consumoComanda.EmpresaId,
                //        MesAnoConsumo = dtConsumo.Month + "/" + dtConsumo.Year,
                //        ValorMes = baixaMes.ValorMes
                //    } into g
                //    orderby g.Key.MesAnoConsumo descending
                //    select new
                //    {
                //        EmpresaId = g.Key.EmpresaId,
                //        DataMesReferencia = g.Key.MesAnoConsumo,
                //        ValorGasto = g.Sum(x => x.ValorConsumo),
                //        ValorPago = g.Key.ValorMes
                //    };

                extrato.ToList().ForEach(x => {
                    Extrato e = new Extrato();
                    e.EmpresaId = x.EmpresaId;
                    e.Empresa = db.Empresas.Find(x.EmpresaId);
                    e.DataMesReferencia = Convert.ToDateTime("1/" + x.DataMesReferencia);
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
