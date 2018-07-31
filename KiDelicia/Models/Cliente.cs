using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace KiDelicia.Models
{
    public class Cliente
    {
        [Key]
        public int IdCliente { get; set; }

        [Required, StringLength(300)]
        public string Nome { get; set; }

        [Required, StringLength(500)]
        public string Endereco { get; set; }

        [Required, StringLength(11)]
        public string Telefone { get; set; }
    }
}