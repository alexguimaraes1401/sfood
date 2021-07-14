export interface Menu { 
    id: number, 
    nome: string, 
    rota: string, 
    icone: any
}

export class Menu implements Menu { 

    constructor(
        id = 0, 
        nome = '', 
        rota = '', 
        icone = ''       
    ){  this.id = id, 
        this.nome = nome, 
        this.icone = icone, 
        this.rota = rota
    }
}

