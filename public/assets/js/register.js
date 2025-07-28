const inputCni= document.querySelector('#inputCni')
const spinner= document.querySelector('#spinner')
const statutMessage= document.querySelector('#statut-message')
const cniValid= /^[1-2][0-9]{12}$/
const prenom=document.querySelector('#prenom')
const nom=document.querySelector('#nom')
const dateNaissance=document.querySelector('#date_naissance')
const lieuNaissance=document.querySelector('#lieu_naissance')
const imageCni =document.querySelector('#imageCni')


export function sendRequest(){
     inputCni.addEventListener('input', (e)=>{
                    e.preventDefault
                    const cni= e.currentTarget.value
         if(cniValid.test(cni)){
                    spinner.classList.toggle('hidden')
                    const response= fetchCitoyens(cni)
            response.then(res=>{
                    if(res.statut==='success' && res.code==200){
                        spinner.classList.add('hidden')
                        inputCni.disabled=true
                        showMessage('success', 'Le numero a été trouvé avec succés')
                        console.log(res)
                                prenom.value=res.data.prenom
                                nom.value=res.data.nom
                                dateNaissance.value=res.data.date_naissance	
                                lieuNaissance.value=res.data.lieu_naissance
                                const image=res.data.copie_cni
                                imageCni.setAttribute('src', image)
                                 
                    }else{
                        showMessage('error', 'Le numero est invalide')
                        spinner.classList.add('hidden')
                    }
            })
            
            }
        })
}

async function fetchCitoyens(cni){
        const r = await fetch(`https://application-daf.onrender.com/api/v1/citoyens/${cni}`)
        return await r.json()
}

function showMessage(statut , message){
         if(statut==='success'){
            statutMessage.classList.add('text-green-600')
        }else{
            statutMessage.classList.add('text-red-600')
        }
        statutMessage.textContent=message
}