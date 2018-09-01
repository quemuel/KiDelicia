using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace KiDelicia.ViewModel
{
    public class CadastroUsuarioViewModel
    {
        [Required (ErrorMessage ="informe seu nome")]
        [MaxLength(100)]
        public string Nome { get; set; }

        [Required(ErrorMessage = "informe seu Login")]
        [MaxLength(50)]
        public string Login { get; set; }

        [Required(ErrorMessage = "informe sua senha")]
        [DataType(DataType.Password)]
        [MinLength(6, ErrorMessage ="A senha deve ter pelo menos 6 caracteres")]
        public string Senha { get; set; }

        [Required(ErrorMessage = "Confirme sua senha")]
        [DataType(DataType.Password)]
        [Display(Name ="Confirma senha")]
        [MinLength(6, ErrorMessage = "A senha deve ter pelo menos 6 caracteres")]
        [Compare(nameof(Senha), ErrorMessage ="A senha e a confirmação não estao iguais")]
        public string ConfinacaoSenha { get; set; }
    }
}