/****** Script do comando SelectTopNRows de SSMS  ******/
SELECT bm.DataMesReferencia
  FROM [ConsumoComanda] cc
  JOIN  [BaixaMes] bm on bm.ClienteId = cc.ClienteId

  SELECT 
		cc.ClienteId, 
		FORMAT(cc.DataConsumo, 'yyyyMM') mes_ano_consumo, 
		FORMAT(bm.DataMesReferencia, 'yyyyMM') mes_ano_baixa, 
		SUM(cc.ValorConsumo) valorGastou,		
		bm.ValorMes ValorPagou
  FROM [ConsumoComanda] cc
  JOIN  [BaixaMes] bm on bm.ClienteId = cc.ClienteId AND FORMAT(cc.DataConsumo, 'yyyyMM') = FORMAT(bm.DataMesReferencia, 'yyyyMM')
  GROUP BY cc.ClienteId, FORMAT(cc.DataConsumo, 'yyyyMM'), FORMAT(bm.DataMesReferencia, 'yyyyMM'), bm.ValorMes