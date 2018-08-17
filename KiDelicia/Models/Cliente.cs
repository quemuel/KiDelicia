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
        public string Nome { get; set; }

        [DisplayName("Empresa")]
        [StringLength(100)]
        public string Empresa { get; set; }

        [DisplayName("Setor")]
        [StringLength(100)]
        public string Setor { get; set; }

        [DisplayName("Telefone")]
        [Required, StringLength(15)]
        [DataType(DataType.PhoneNumber, ErrorMessage = "Forneça o número do telefone no formato (00) 0000-0000")]
        public string Telefone { get; set; }
        
        [DisplayName("Descrição")]
        [MaxLength(5000)]
        public string Descricao { get; set; }

        public virtual ICollection<ConsumoComanda> ConsumoComandas { get; set; }
        public virtual ICollection<BaixaMes> BaixaMeses { get; set; }
    }
}