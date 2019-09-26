
/*
    Gerar o grafo como uma matriz de incidência
    @param
        G a struct do grafo
        n o número de arestas
        p a probilidade de gerar uma arestas
        
*/

/*
    G[v][e]
        v -> vétice
        e -> aresta
*/

/*
    Representação de um matriz de incidência

       e1  e2  e3  e4
    0| 1   1   1   0  |
    1| 1   0   0   1  |
    2| 0   1   0   0  |
    3| 0   0   1   1  |
*/
G[v][e] = GeraGrafo(G,n,p);

for(v = 0 ; v < n ; v++){
    for(e=0;e<2;e++){
        G[v][e].c  = 'branco';
        G[v][e].d  = inf;   
        G[v][e].pi = NULL;
    }
}

//A raiz escolhida é o vertice 0
for(e = 0; e < 2 ; e++){
    G[0][e].c = 'cinza';
    G[0][e].d = 0;
    G[0][e].pi = NULL;
}

//A fila deve ser do tamanho dos vértices
Fila[v] = Enfilera(G)
While(Fila == NULL){
    Desenfilera(Fila,G[u]); 
    for(int u = v+1; u < n ; u++){
        for(e=0;e<2;e++){
            if(G[u][e]==1){
                G[u][e].c  = 'cinza';
                G[u][e].d  = 0;
                G[u][e].pi = NULL;
            }
        }
    }
    for(e=0;e<2;e++){
        G[u][e].c = 'preto';
}