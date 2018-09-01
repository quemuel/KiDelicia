using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace KiDelicia.ViewModel
{
    public class LoginViewModel
    { 
        public string UrlRetorno { get; set; }

        [Required(ErrorMessage = "informe seu Login")]
        [MaxLength(50, ErrorMessage ="O login deve ter até 50 caracteres")]
        public string Login { get; set; }

        [Required(ErrorMessage = "informe sua senha")]
        [DataType(DataType.Password)]
        [MinLength(6, ErrorMessage = "A senha deve ter pelo menos 6 caracteres")]
        public string Senha { get; set; }
    }
}