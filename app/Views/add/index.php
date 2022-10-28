</html>                                		
<style>
div.static {
  position: fixed;
  bottom: 0;
  right: 690;
  width: 150px;
  border: 0px solid #543535;
}
</style>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
<title>halaman pesan tiket</title>
<style>
  .tengah{
            background-image:url(  keren-hd-texture-wallpapers-wood-background-kayu-keren-hd-wallpapers-for-free-download-doodle-background-kayu-keren-hd-wallpapers-wallpaper.jpg);
            background-position:center;
            width:auto;
            height:auto;
            nav-item columns: -12px;
        }
  

  table{
   background: #20c997;
   margin:auto;

  }

  
 </style>
</head>
<body class="tengah">
			
 <div>
  <br>
  <table width="800" height="150px" border="2">
    <th>Nama tiket</th>
    <th><input type="text"  id="nama" onchange="total()" ></th>
   </tr>
   
   <tr>    
    <th>Harga</th>
    <th><input type="number"  id="harga" onchange="total()"></th>
   </tr>

   <tr>    
    <th>Jumlah Beli</th>    
    <th><input type="number" id="jumlah"  value="0" onchange="total()"></th>
   </tr>
   
   <tr>    
    <th>jenis tiket</th>
    <th><select id="status" onchange="total()">
   <option>premium</option>
   <option>silver</option>
   <option>gold</option>
    </select></th>
   </tr>
   <tr>    
    <th>tanggal</th>
    <th><select id="status" onchange="total()">
   <option>1</option>
   <option>2</option>
   <option>3</option>
   <option>4</option>
   <option>5</option>
   <option>6</option>
   <option>7</option>
   <option>8</option>
   <option>9</option>
   <option>10</option>
   <option>11</option>
   <option>12</option>
   <option>13</option>
   <option>14</option>
   <option>15</option>
   <option>16</option>
   <option>17</option>
   <option>18</option>
   <option>19</option>
   <option>20</option>
   <option>21</option>
   <option>22</option>
   <option>23</option>
   <option>24</option>
   <option>25</option>
   <option>26</option>
   <option>27</option>
   <option>28</option>
   <option>29</option>
   <option>30</option>
    </select></th>
   </tr>

   <th>bulan</th>
    <th><select id="status" onchange="total()">
   <option>1</option>
   <option>2</option>
   <option>3</option>
   <option>4</option>
   <option>5</option>
   <option>6</option>
   <option>7</option>
   <option>8</option>
   <option>9</option>
   <option>10</option>
   <option>11</option>
   <option>12</option>
   </select></th>
   </tr>

   <th>tahun</th>
    <th><select id="status" onchange="total()">
   <option>2022</option>
   <option>2023</option>
   <option>2024</option>
   <option>2025</option>
   <option>2026</option>
   <option>2027</option>
   <option>2028</option>
   <option>2029</option>
   <option>2030</option>
   <option>2031</option>
   <option>2032</option>
   <option>2033</option>
   </select></th>
   </tr>

   <tr>    
    <th>jumlah total</th>
    <th><input type="text" style="background: yellow" id="total" disabled></th>
   </tr>

   <tr>    
    <th>Pembayaran</th>    
    <th><input type="number" id="bayar" onchange="total()"></th>
   </tr>
   
   <tr>    
    <th>Kembalian</th>
    <th><input type="text" style="background: yellow" id="total1" disabled></th>
   </tr>
         
            <tr>
                <th><input type="button" style="background: white"  onclick="window.print()" value="pesan"></th>
            </tr>
   
   <tr>   
</table>

    <table width="800" height="150px" border="8">
    <th><label align="landscape"  id="pesan" ></label></th>
    </table>
   </tr>         
   
        <marquee scrolldelay="100" direction="left" bgcolor="#20c997"> > TERIMA KASIH TELAH MEMESAN DI TOKO KONSER EPSILON < </marquee>
  
  
  <script type="text/javascript">
  
  function total() {
   var nama = document.getElementById('nama').value;
   var harga =  parseInt(document.getElementById('harga').value);
   var jumlah_beli =  parseInt(document.getElementById('jumlah').value);
   var pembayaran =  parseInt(document.getElementById('bayar').value);
   var jenis = document.getElementById("status").value;
   var jumlah_harga = harga * jumlah_beli;
    document.getElementById('total').value = jumlah_harga;

   var kembali = pembayaran - jumlah_harga;
    document.getElementById('total1').value = kembali;
  
  
  </script>
 </div>
</body>
</html>