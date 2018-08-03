using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace KiDelicia.Models
{
    public class Produto
    {
        [Key]
        public int IdProduto { get; set; }

        [Required]
        public int Codigo { get; set; }

        [Required, StringLength(300)]
        public string Nome { get; set; }

        [DisplayFormat(DataFormatString = "{0:n2}",
            ApplyFormatInEditMode = true,
            NullDisplayText = "Sem preço")]
        public decimal Valor { get; set; }
    }
}