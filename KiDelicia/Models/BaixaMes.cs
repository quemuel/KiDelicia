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
        [DisplayFormat(DataFormatString = "{0:dd/MM/yyyy}")]
        [Required]
        public DateTime DataMesReferencia { get; set; }

        [DisplayName("Cliente")]
        [Required(ErrorMessage = "Escolha o cliente")]
        public int? ClienteId { get; set; }
        public Cliente Cliente { get; set; }

        [DisplayName("Empresa")]
        [Required(ErrorMessage = "Escolha a empresa")]
        public int? EmpresaId { get; set; }
        public Empresa Empresa { get; set; }

        [DisplayName("Data de Cadastro")]
        [DatabaseGenerated(DatabaseGeneratedOption.Computed)]
        [DefaultValue("getdate()")]
        public DateTime DataCadastro { get; set; }
    }
}