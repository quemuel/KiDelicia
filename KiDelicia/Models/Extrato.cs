using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace KiDelicia.Models
{
    public class Extrato
    {
        [DisplayName("Mês Referencia")]
        [DisplayFormat(DataFormatString = "{0:MM/yyyy}", ApplyFormatInEditMode = true)]
        [Required]
        public DateTime DataMesReferencia { get; set; }
        
        [DisplayName("Cliente")]
        public int? ClienteId { get; set; }
        public Cliente Cliente { get; set; }

        [DisplayName("Tipo Consumidor")]
        public bool FlagCliente { get; set; }

        [DisplayName("Empresa")]
        public int? EmpresaId { get; set; }
        public Empresa Empresa { get; set; }

        [DisplayName("Valor Pago Mensal")]
        [DisplayFormat(DataFormatString = "{0:n2}",
            ApplyFormatInEditMode = true,
            NullDisplayText = "Sem preço")]
        public decimal ValorGasto { get; set; }

        [DisplayName("Valor Pago Mensal")]
        [DisplayFormat(DataFormatString = "{0:n2}",
            ApplyFormatInEditMode = true,
            NullDisplayText = "Sem preço")]
        public decimal ValorPago { get; set; }
    }
}