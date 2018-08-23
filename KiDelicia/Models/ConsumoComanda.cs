using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace KiDelicia.Models
{
    public class ConsumoComanda
    {
        [Key]
        public int ConsumoComandaId { get; set; }

        [DisplayName("Valor Consumo")]
        [DisplayFormat(DataFormatString = "{0:n2}",
            ApplyFormatInEditMode = true,
            NullDisplayText = "Sem preço")]
        public decimal ValorConsumo { get; set; }

        [DisplayName("Data do Consumo")]
        [DisplayFormat(DataFormatString = "{0:dd/MM/yyyy}", ApplyFormatInEditMode = true)]
        [Required]
        public DateTime DataConsumo { get; set; }

        [DisplayName("Tipo Consumidor")]
        [DefaultValue(1)]
        public bool FlagCliente { get; set; }

        [DisplayName("Cliente")]
        public int? ClienteId { get; set; }
        public Cliente Cliente { get; set; }

        [DisplayName("Empresa")]
        public int? EmpresaId { get; set; }
        public Empresa Empresa { get; set; }

        [DisplayName("Data de Cadastro")]
        [DatabaseGenerated(DatabaseGeneratedOption.Computed)]
        [DefaultValue("getdate()")]
        public DateTime DataCadastro { get; set; }
    }
}