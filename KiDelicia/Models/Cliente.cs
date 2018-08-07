using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace KiDelicia.Models
{
    public class Cliente
    {
        [Key]
        public int ClienteId { get; set; }

        [DisplayName("Nome")]
        [Required, StringLength(300)]
        public string NomeCliente { get; set; }

        [DisplayName("Endereço")]
        [Required, StringLength(500)]
        public string EnderecoCliente { get; set; }

        [DisplayName("Telefone")]
        [Required, StringLength(11)]
        public string TelefoneCliente { get; set; }

        public virtual ICollection<ConsumoComanda> ConsumoComandas { get; set; }
        public virtual ICollection<BaixaMes> BaixaMeses { get; set; }
    }
}