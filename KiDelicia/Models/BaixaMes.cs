using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace KiDelicia.Models
{
    public class BaixaMes
    {
        [Key]
        public int BaixaMesId { get; set; }

        [DisplayName("Valor Pago Mensal")]
        [DisplayFormat(DataFormatString = "{0:n2}",
            ApplyFormatInEditMode = true,
            NullDisplayText = "Sem preço")]
        public decimal ValorMes { get; set; }

        [DisplayName("Mês Referencia")]
        [DisplayFormat(DataFormatString = "{0:MM/yyyy}", ApplyFormatInEditMode = true)]
        [Required]
        public DateTime DataMesReferencia { get; set; }

        [DisplayName("Cliente")]
        public int? ClienteId { get; set; }
        public Cliente Cliente { get; set; }

        [DisplayName("Tipo Consumidor")]
        [DefaultValue(1)]
        public bool FlagCliente { get; set; }

        [DisplayName("Empresa")]
        public int? EmpresaId { get; set; }
        public Empresa Empresa { get; set; }

        [DisplayName("Data de Cadastro")]
        //[DataType(DataType.Date)]
        //[DisplayFormat(DataFormatString = "{0:d}")]
        //[DisplayFormat(ApplyFormatInEditMode = true, DataFormatString = "{0:dd/MM/yyyy HH:mm:ss}")]
        [DatabaseGenerated(DatabaseGeneratedOption.Computed)]
        [DefaultValue("getdate()")]
        public DateTime DataCadastro { get; set; }
    }
}