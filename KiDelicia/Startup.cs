using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(KiDelicia.Startup))]
namespace KiDelicia
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
