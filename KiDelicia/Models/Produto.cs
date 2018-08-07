using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace KiDelicia.Models
{
    public class Produto
    {
        [Key]
        public int ProdutoId { get; set; }

        [DisplayName("Código")]
        [Required]
        public string CodigoProduto { get; set; }

        [DisplayName("Nome")]
        [Required, StringLength(300)]
        public string NomeProduto { get; set; }

        [DisplayName("Preço")]
        [DisplayFormat(DataFormatString = "{0:n2}",
            ApplyFormatInEditMode = true,
            NullDisplayText = "Sem preço")]
        public decimal ValorProduto { get; set; }
    }
}