export interface Usuario { 
    id: number, 
    nome: string, 
    senha: string, 
}

export class Usuario implements Usuario { 

    constructor(
        id = 0, 
        nome = '', 
        senha = ''       
    ){  this.id = id, 
        this.nome = nome, 
        this.senha = senha
    }
}
