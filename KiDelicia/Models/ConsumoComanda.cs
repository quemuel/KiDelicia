using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace KiDelicia.Models
{
    public class ConsumoComanda
    {
        [Key]
        public int ConsumoComandaId { get; set; }        

        [DisplayFormat(DataFormatString = "{0:n2}",
            ApplyFormatInEditMode = true,
            NullDisplayText = "Sem preço")]
        public decimal ValorConsumo { get; set; }

        [DisplayFormat(DataFormatString = "{0:dd/MM/yyyy}")]
        [Required]
        public DateTime DataConsumo { get; set; }        

        [DisplayName("Cliente")]
        [Required(ErrorMessage = "Escolha o cliente")]
        public int? ClienteId { get; set; }
        public Cliente Cliente { get; set; }

        [DisplayName("Empresa")]
        [Required(ErrorMessage = "Escolha a empresa")]
        public int? EmpresaId { get; set; }
        public Empresa Empresa { get; set; }
    }
}