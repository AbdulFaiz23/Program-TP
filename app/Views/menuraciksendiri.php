<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
.cup-wrapper {
  position: relative;
  width: 120px;
  height: 240px;
}
.loader {
  width: 70px;
  height: 100px;
  position: absolute;
  bottom: 0;
  border: 2px solid #bbb6aa;
  border-top: none;
  background: #e4e0d7;
  clip-path: polygon(0% 0%,100% 0%,85% 100%,15% 100%);
  overflow: hidden;
}
.liquid-container {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column-reverse;
}
.liquid {
  width: 100%;
  height: 0;
  transition: height .6s ease;
  clip-path: polygon(0% 0%,100% 0%,85% 100%,15% 100%);
}
.ice-container {
  position: absolute;
  width: 100%;
  height: 60px;
  opacity: 0;
  transition: bottom .4s ease, opacity .3s ease;
}
.ice {
  position: absolute;
  background: rgba(200,240,255,.9);
  border-radius: 4px;
}
.ice-1 { width:18px;height:18px;left:12%;bottom:-10px;transform:rotate(12deg); }
.ice-2 { width:22px;height:22px;left:35%;bottom:-10px;transform:rotate(-39deg); }
.ice-3 { width:16px;height:16px;left:62%;bottom:-12px;transform:rotate(25deg); }

.lid {
  width: 90px;
  height: 18px;
  background: #333;
  border-radius: 10px;
  position: absolute;
  top: 10px;
  left: 30%;
  transform: translateX(-50%);
}
.lid.closed {
  animation: closeLid .6s ease forwards;
}
@keyframes closeLid {
  to { top: 120px; }
}
</style>

<div class="container mt-5 pt-5">

<form action="<?= base_url('cart/add') ?>" method="post" id="customCoffeeForm">

<!-- REQUIRED CART FIELDS -->
<input type="hidden" name="id" value="custom">
<input type="hidden" name="name" id="cart-name" value="">
<input type="hidden" name="price" id="cart-price" value="0">
<input type="hidden" name="image"
       value="coffee1-gh-pages/images/coffeecardboard.jpg">

<div class="mb-3">
  <label class="form-label text-light">Nama Racikan</label>
  <input type="text" class="form-control" id="drink-name">
</div>

<div class="card p-3 bg-dark text-light border-secondary mb-3">
<div class="row">

<div class="col-md-4 d-flex justify-content-center">
  <div class="cup-wrapper">
    <div class="lid"></div>
    <div class="loader">
      <div class="liquid-container" id="liquids"></div>
      <div id="ice" class="ice-container">
        <div class="ice ice-1"></div>
        <div class="ice ice-2"></div>
        <div class="ice ice-3"></div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-8">

<?php
$items = [
  'espresso' => ['label'=>'Espresso','price'=>2000],
  'susu'     => ['label'=>'Susu','price'=>1000],
  'gula'     => ['label'=>'Gula','price'=>500],
];
foreach ($items as $k=>$v):
?>
<div class="row align-items-center mb-2">
  <div class="col-6"><?= $v['label'] ?> <small>(Rp <?= number_format($v['price']) ?>)</small></div>
  <div class="col-6">
    <div class="input-group input-group-sm">
      <button type="button" class="btn btn-outline-light btn-minus">-</button>
      <input type="number" name="<?= $k ?>" class="form-control qty text-center" value="0" readonly>
      <button type="button" class="btn btn-outline-light btn-plus">+</button>
    </div>
  </div>
</div>
<?php endforeach ?>

<div class="row align-items-center">
  <div class="col-6">Es <small>(Rp 1.000)</small></div>
  <div class="col-6">
    <button type="button" id="btn-ice" class="btn btn-sm btn-outline-info w-100">
      ❄️ Ice OFF
    </button>
    <input type="hidden" name="es" id="iceValue" value="0">
  </div>
</div>

</div>
</div>
</div>

<div class="mb-3 text-light">
  <strong>Total:</strong> Rp <span id="total">0</span>
</div>

<div class="mb-4">
  <button type="button" id="btn-finalize" class="btn btn-success me-2">
    Finalize Coffee ☕
  </button>
  <button type="submit" class="btn btn-primary">
    Simpan Racikan
  </button>
</div>

</form>
</div>

<script>
let currentLevel = 0;
let iceOn = false;

const liquids = document.getElementById('liquids');
const ice = document.getElementById('ice');
const lid = document.querySelector('.lid');
const totalEl = document.getElementById('total');

const MAP = {
  espresso:{p:5,c:'#6f4e37'},
  susu:{p:10,c:'#f5f5dc'},
  gula:{p:5,c:'rgba(210,180,140,.6)'}
};
const PRICE = {espresso:2000,susu:1000,gula:500,es:1000};

function addLiquid(p,c){
  if(currentLevel>=100)return;
  currentLevel+=p;
  const d=document.createElement('div');
  d.className='liquid';
  d.style.background=c;
  liquids.appendChild(d);
  requestAnimationFrame(()=>d.style.height=p+'%');
  syncIce();
}
function removeLiquid(p){
  const l=liquids.lastElementChild;
  if(!l)return;
  currentLevel-=p;
  l.remove();
  syncIce();
}
function syncIce(){
  if(!iceOn)return;
  ice.style.opacity=1;
  ice.style.bottom=(currentLevel)+'px';
}
function updateTotal(){
  let t=0;
  document.querySelectorAll('.qty').forEach(i=>{
    t+=i.value*PRICE[i.name];
  });
  if(iceOn)t+=PRICE.es;
  totalEl.textContent=t.toLocaleString('id-ID');
  document.getElementById('cart-price').value=t;
}

document.querySelectorAll('.btn-plus').forEach(b=>{
  b.onclick=()=>{
    const i=b.parentElement.querySelector('.qty');
    i.value++;
    addLiquid(MAP[i.name].p,MAP[i.name].c);
    updateTotal();
  }
});
document.querySelectorAll('.btn-minus').forEach(b=>{
  b.onclick=()=>{
    const i=b.parentElement.querySelector('.qty');
    if(i.value==0)return;
    i.value--;
    removeLiquid(MAP[i.name].p);
    updateTotal();
  }
});

document.getElementById('btn-ice').onclick=()=>{
  iceOn=!iceOn;
  document.getElementById('iceValue').value=iceOn?1:0;
  ice.style.opacity=iceOn?1:0;
  updateTotal();
};

document.getElementById('btn-finalize').onclick=()=>{
  if(currentLevel===0)return;
  lid.classList.remove('closed');
  void lid.offsetWidth;
  lid.classList.add('closed');
};

document.getElementById('customCoffeeForm').onsubmit=()=>{
  const n=document.getElementById('drink-name').value.trim();
  document.getElementById('cart-name').value=n!==''?n:'Custom Coffee';
};
</script>

<?= $this->endSection() ?>
