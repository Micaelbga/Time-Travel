select distinct filme.nome_filme, filme.ano_lançamento, transmissão.nome_1, transmissão.nome_2,
        filme.tipo_viagem, filme.características_especiais, filme.mecanismo, filme.atores, filme.cena_viagem, filme.frase
        FROM filme 
        join atuação on filme.id_filme = atuação.id_filme
        join ator on atuação.id_ator = ator.id_ator
        join transmissão on filme.id_filme = transmissão.id_filme
         WHERE filme.tipo_viagem LIKE '%fisica%'group by filme.nome_filme