using System;
using System.ComponentModel.DataAnnotations;
using UtilExtension;

namespace KiDelicia.Helpers
{
    public class CnpjAttribute : ValidationAttribute
    {
        public override bool IsValid(object value)
        {
            var cnpj = Convert.ToString(value);

            if (String.IsNullOrEmpty(cnpj))
                return true;

            return UtilsExtension.CheckCnpj(cnpj);
        }
    }
}