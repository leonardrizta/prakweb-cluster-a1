var listData=[
		"Buku Tulis",
		"Pensil",
		"Spidol"
	];

function showData(){
	var x = document.getElementById('list-data');
	x.innerHTML = "";

	for(var i = 0; i < listData.length; i++){
		var buttonEdit = "<a href='#' onclick='edit("+i+")'>Edit</a>";
		var buttonDel = "<a href='#' onclick='del("+i+")'>Hapus</a>";
	   
		x.innerHTML +=  "<li>" + listData[i] + " ["+buttonEdit + " | "+ buttonDel +"]</li>";
	}
}

function add(){
	var input = document.querySelector("input[name=input]").value;
	if(input==""){
		alert("Input tidak bisa kosong!");
	}else{
		listData.push(input);
		showData();
	}
}

function edit(id){
	var newData = prompt("Nama Baru", listData[id]);
	if(newData==""){
		alert("Input tidak bisa kosong!");
	}else{
		listData[id] = newData;
		showData();
	}
}

function del(id){
	listData.splice(id,1);
	showData();
}

showData();