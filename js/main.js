var newProjectInput = document.getElementById('new-project-name');

newProjectInput.addEventListener('keydown', function(event){

   if(event.key == 'Enter'){
       console.log(event);
      if(event.target.value.length > 3){
         var fd = new FormData();
         fd.append('projectName',event.target.value);
         var xhr = new XMLHttpRequest();
         xhr.onreadystatechange = function(){
            if(this.readyState === 4){
               event.target.value = '';
               window.location.reload();
            }
         }
         xhr.open('POST','http://localhost/project_manager/newProject.php');
         xhr.send(fd);
      }
   }
});

function toggleHidden(event){
   var target = document.getElementById(event.target.getAttribute('data-target'));
   target.classList.toggle('hidden');
}