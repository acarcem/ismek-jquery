
$(document).ready(function(){
	$("#ara").click(function () {
		var users = $("#arama").val();
			$.ajax({
	    dataType: "json",
   		method:"GET",
	    url: "https://api.github.com/users/"+users,
	    data: users,
	    success: function(data){
			console.log(data);
			var kullanicilar = data;

			$('#resim').attr('src',data.avatar_url);
			document.getElementById("repo").innerText="Repo Sayısı : "+data.public_repos;
			document.getElementById("takipci").innerText="Takipçi : "+data.followers;
			document.getElementById("takip").innerText="Takip Edilen : "+data.following;
			document.getElementById("ad").innerText="Ad Soyad : "+data.name;
			document.getElementById("url").innerText="Github URL : "+data.html_url;
			document.getElementById("sirket").innerText="Şirket : "+data.company;
			document.getElementById("web").innerText="Web site / Blog : "+data.blog;
			document.getElementById("yer").innerText="Şehir / Ülke : "+data.location;
			document.getElementById("tarih").innerText="Üyelik Tarihi : "+data.created_at;
			$('#profil').attr('href',data.html_url);
		},
		error:function(xhr, textStatus, errorThrown){
			var alert = '<div class="alert alert-danger" id="alert" role="alert"><p class="font-weight-bold">Kullanıcı Bulunamadı !!!</p></div>'
			$('#alert').append(alert);
			console.log(errorThrown);
		}
	});
});
});
