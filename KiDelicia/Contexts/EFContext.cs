﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.Entity;
using System.Data.Entity.ModelConfiguration.Conventions;
using KiDelicia.Models;
using KiDelicia.Migrations;
using System.ComponentModel;

namespace KiDelicia.Contexts
{
    public class EFContext : DbContext
    {
        public EFContext() : base("DefaultConnection")
        {
            //Database.SetInitializer<EFContext>(new DropCreateDatabaseIfModelChanges<EFContext>());
            Database.SetInitializer<EFContext>(new MigrateDatabaseToLatestVersion<EFContext, Configuration>());
        }

        public DbSet<Cliente> Clientes { get; set; }
        public DbSet<Empresa> Empresas { get; set; }
        public DbSet<ConsumoComanda> ConsumoComandas { get; set; }        
        public DbSet<Produto> Produtos { get; set; }
        public DbSet<BaixaMes> BaixaMeses { get; set; }
        public DbSet<Usuario> Usuarios { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            base.OnModelCreating(modelBuilder);
            modelBuilder.Conventions.Remove<PluralizingTableNameConvention>();
            var convention = new AttributeToColumnAnnotationConvention<DefaultValueAttribute, string>("SqlDefaultValue", (p, attributes) => attributes.SingleOrDefault().Value.ToString());
            modelBuilder.Conventions.Add(convention);
        }
    }
}