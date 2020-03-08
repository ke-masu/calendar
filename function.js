function schedule_show(){

      for(i=0;i<plan_date.length;i++){
          var change_date = plan_date[i];

          var change_value = document.getElementById(change_date).innerHTML;

          change_value = change_value.slice( 0, -1 ) + '○';
          
          document.getElementById(change_date).innerHTML = change_value;
         
      }

}
schedule_show();


function task_hover_visible(ele){
    var id_value = ele.id
    var flag = true; 
    var start = 0 
    var number = [];
    var task = [];

    while(flag){
       var result = plan_date.indexOf(id_value,start);
       
       if(result == -1){
           flag = false;
       }
       start = result+1
       if(result != -1){
       number.push(result);
       }
    }

    

    if(number != null ){
        for(i=0;i<number.length;i++){
     task.push(plan_task[number[i]]);
    }
}

    //以下、ポップアップ表示させる
    if(task.length != 0){
    var element = document.getElementById("menu");
    var content ="";
    content += '<p>'+id_value+'のタスク <br>';
    for(i=0;i<task.length;i++){
       content += task[i]+'<br>'
    }
    content += '</p>';
    document.getElementById("menu").innerHTML = content
    element.style.visibility = (element.style.visibility == 'visible')? "hidden": "visible";
}
}
