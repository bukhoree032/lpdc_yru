<h2>ประวัติการติดตาม</h2>
<p>คลิกที่ปุ่มภายในเมนูแท็บ:</p>
<?php foreach ($trace['quer_trace'] as $key => $value) {
  if($value['j_t_occupation'] == '9'){
    $this->load->view('japo_model/modal_trace_edit/honey',$value);
  }
  if($value['j_t_occupation'] == '8'){
    $this->load->view('japo_model/modal_trace_edit/chicken',$value);
  }
  if($value['j_t_occupation'] == '10'){
    $this->load->view('japo_model/modal_trace_edit/mushroom',$value);
  }
  if($value['j_t_occupation'] == '29'){
    $this->load->view('japo_model/modal_trace_edit/vegetable',$value);
  }
} ?>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'honey')" id="defaultOpen">ผึ้งชันโรง</button>
  <button class="tablinks" onclick="openCity(event, 'chicken')">ไก่เบตง</button>
  <button class="tablinks" onclick="openCity(event, 'vegetable')">ผักท้องถิ่น</button>
  <button class="tablinks" onclick="openCity(event, 'mushroom')">เพาะเห็ด</button>
</div>

<div id="honey" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <?php $this->load->view('japo_model/tablink/tablink_honey'); ?>
</div>

<div id="chicken" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <?php $this->load->view('japo_model/tablink/tablink_chicken'); ?>
</div>

<div id="vegetable" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <?php $this->load->view('japo_model/tablink/tablink_vegetable'); ?>
</div>

<div id="mushroom" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <?php $this->load->view('japo_model/tablink/tablink_mushroom'); ?>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>