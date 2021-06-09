function addCountry(){
    let verified=true;
    let name=document.getElementById("name_field").value;
    let continent=document.getElementById("continent_field").value;
    let language=document.getElementById("language_field").value;

    if (name==""){
        verified=false;
    }else if (continent==""){
        verified=false;
    }else if (language==""){
        verified=false
    }

    if (verified==true){
        document.location ="/adminpanel/crud/add/country/insert/"+name+"/"+continent+"/"+language;
    }else{
        alert("One or more of the fields are empty")
    }
}

function addGenere(){
    let verified=true;
    let name=document.getElementById("name_field").value;
    let description=document.getElementById("description_field").value;
    if (name==""){
        verified=false;
    }else if (description==""){
        verified=false;
    }

    if (verified==true){
        document.location ="/adminpanel/crud/add/genere/insert/"+name+"/"+description;
    }else{
        alert("One or more of the fields are empty")
    }
    
}

function addStation(){
    let verified=true;
    let name=document.getElementById("name_field").value;
    let description=document.getElementById("description_field").value;
    let image=document.getElementById("image_field").value;
    let country=document.getElementById("countries_field").value;
    let genere=document.getElementById("generes_field").value;
    let url=document.getElementById("url_field").value;
    if (name==""){
        verified=false;
    }else if (description==""){
        verified=false;
    }else if (image==""){
        verified=false;
    }else if (country==""){
        verified=false;
    }else if (genere==""){
        verified=false;
    }else if (url==""){
        verified=false;
    }


    if (verified==true){
        document.location ="/adminpanel/crud/add/station/insert/"+btoa(name)+"/"+btoa(description)+"/"+btoa(image)+"/"+btoa(country)+"/"+btoa(genere)+"/"+btoa(url)
    }else{
        alert("One or more of the fields are empty")
    }
}

function addTopCharts(){

}

function deleteTopCharts(){

}

function editCountry(id){
    let verified=true;
    let name=document.getElementById("name_field").value;
    let continent=document.getElementById("continent_field").value;
    let language=document.getElementById("language_field").value;

    if (name==""){
        verified=false;
    }else if (continent==""){
        verified=false;
    }else if (language==""){
        verified=false
    }

    if (verified==true){
        document.location ="/adminpanel/crud/update/country/edit/"+name+"/"+continent+"/"+language+"/"+id;
    }else{
        alert("One or more of the fields are empty")
    }
}

function editGenere(id){
    let verified=true;
    let name=document.getElementById("name_field").value;
    let description=document.getElementById("description_field").value;
    if (name==""){
        verified=false;
    }else if (description==""){
        verified=false;
    }

    if (verified==true){
        document.location ="/adminpanel/crud/update/genere/edit/"+name+"/"+description+"/"+id;
    }else{
        alert("One or more of the fields are empty")
    }
}

function editStation(id){
    let verified=true;
    let name=document.getElementById("name_field").value;
    let description=document.getElementById("description_field").value;
    let image=document.getElementById("image_field").value;
    let country=document.getElementById("countries_field").value;
    let genere=document.getElementById("generes_field").value;
    let url=document.getElementById("url_field").value;
    if (name==""){
        verified=false;
    }else if (description==""){
        verified=false;
    }else if (image==""){
        verified=false;
    }else if (country==""){
        verified=false;
    }else if (genere==""){
        verified=false;
    }else if (url==""){
        verified=false;
    }


    if (verified==true){
        document.location ="/adminpanel/crud/update/station/edit/"+btoa(name)+"/"+btoa(description)+"/"+btoa(image)+"/"+btoa(country)+"/"+btoa(genere)+"/"+btoa(url)+"/"+btoa(id)
    }else{
        alert("One or more of the fields are empty")
    }
}

function deleteCountry(id){
    if (confirm("Are you sure you want to delete the country ?")) {
        document.location ="/adminpanel/crud/delete/country/remove/"+id;
      }
}

function deleteGenere(id){
    if (confirm("Are you sure you want to delete the genere ?")) {
        document.location ="/adminpanel/crud/delete/genere/remove/"+id;
    }
}

function deleteStation(id){
    if (confirm("Are you sure you want to delete the station ?")) {
        document.location ="/adminpanel/crud/delete/station/remove/"+id;
    }
}
