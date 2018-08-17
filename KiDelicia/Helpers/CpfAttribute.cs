using System;
using System.ComponentModel.DataAnnotations;
using UtilExtension;

namespace KiDelicia.Helpers
{
    public class CpfAttribute : ValidationAttribute
    {
        public override bool IsValid(object value)
        {
            var cpf = Convert.ToString(value);

            if (String.IsNullOrEmpty(cpf))
                return true;

            return UtilsExtension.CheckCpf(cpf);
        }
    }
}