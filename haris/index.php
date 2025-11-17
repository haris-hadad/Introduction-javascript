<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id='title'>hello world</h1>
    <button id='btn'>cliquer ici</button>
    <button id="btnpokemons">affiche les pokemons</button>
    <script>
        let newAray =[];
        let name =['h','a','r','i','s'];
        let index = 0;           
        document.addEventListener('keydown',function (e){
            console.log(e.key);           
            let char = e.key;             
            console.log(name.length);            
                if(name[index]==char){
                    index++;
                    newAray.push(char);
                    console.log(newAray);
                    if(newAray.length==name.length){
                         const body = document.body;
                         body.style.background='blue';
                    }  
                } 
                else{
                    index=0
                    newAray=[];
                    return;
                }  
                
                
                                 
            
        })
    const button= document.getElementById('btn');
    const title=document.getElementById('title');
    button.addEventListener('click', function (e){
        title.textContent='bonjour';
        document.body.style.background= 'blue';
        const element = document.createElement('h2');
        const text = document.createElement('h3');
        text.textContent = "Salut tout le monde c'est cactus";
        element.textContent="bonsoir les amis";
        document.body.prepend(element);
        document.body.append(text);
    });
    let pokemons =[        
        {id:1,name:"pikatchu",type:"electric"},
        {id:2,name:"bulbasore",type:"eau"},
        {id:3,name:"shrizard",type:"feu"}
    ];

    console.log(pokemons);
    const btnpokemons = document.getElementById('btnpokemons');
    btnpokemons.addEventListener('click', function (e){
        const ul = document.createElement('ul');
        const newPokemon ={id:4,name:'puket',type:'plante'};
        pokemons.push(newPokemon);
        pokemons=pokemons.map((pokemon)=>{
            if((pokemon.id)==1){
                return {...pokemon,name:'haris'};
              
            }
            else{
                return pokemon;
            }
            
        });
        pokemons=pokemons.filter((pokemon)=>{
            return pokemon.id !==3;
        })
        pokemons.forEach((pokemon)=>{
            const li = document.createElement('li');
            li.value=pokemon.name;
            li.textContent=pokemon.name;
            ul.append(li)
            
        });
        document.body.append(ul); 

    });
       
   
    </script>
</body>
</html>