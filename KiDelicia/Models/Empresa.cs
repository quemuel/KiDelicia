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
        public int IdEmpresa { get; set; }

        [Required, StringLength(300)]
        public string NomeFantasia { get; set; }
        
        public int Cnpj { get; set; }

        [Required, StringLength(500)]
        public string Endereco { get; set; }

        [Required, StringLength(11)]
        public string Telefone { get; set; }

        public virtual ICollection<ConsumoComanda> ConsumoComandas { get; set; }
    }
}