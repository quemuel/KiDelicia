using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace KiDelicia.Models
{
    public class Empresa
    {
        [Key]
        public int EmpresaId { get; set; }

        [Required, StringLength(300)]
        public string NomeFantasia { get; set; }

        [Required, StringLength(14)]
        public string Cnpj { get; set; }

        [Required, StringLength(500)]
        public string EnderecoEmpresa { get; set; }

        [Required, StringLength(11)]
        public string TelefoneEmpresa { get; set; }

        public virtual ICollection<ConsumoComanda> ConsumoComandas { get; set; }
        public virtual ICollection<BaixaMes> BaixaMeses { get; set; }
    }
}