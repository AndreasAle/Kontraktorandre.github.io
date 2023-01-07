<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <?php foreach(slider() as $s):?>
            <div class="slider-item" style="background-image: url(<?=base_url().'uploads/'.$s['image'];?>);">
            <div class="overlay "></div>
            <div class="container">
                <div class="col-md-12 ftco-animate text-center text-light">
                    <span class="row justify-content-center align-items-center">
                         <h1 class="text-light d-sm-none d-md-block mt-5 p-5">Andreas Kontruktor</h1>
                         <p>Konstruksi adalah salah satu industri yang paling terbelakang perihal digitalisasi. Sementara, digitalisasi telah terbukti mutakhir dalam meningkatkan produktivitas dari banyak sektor lain di dunia. Padahal, konstruksi adalah industri yang sangat besar (di Indonesia, 10% dari PDB nasional adalah kontribusi dari sektor ini). Bayangkan apa manfaat 
                            yang bisa kita rasakan jika sektor raksasa ini akhirnya bisa terdigitalisasi, sesuatu yang Trek lakukan di setiap harinya.</p>
                             <div class="form-group">
                             <a href="<?=base_url('welcome/about');?>"><button type="button mx-md-n5" class="btn btn-dark">Full Article</button></a>
                    </div>
                             
                    </span>

                </div>
            </div>
            
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    
                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2"><?=$s['title'];?></h1>
                        
                        <h2 class="subheading mb-4"><?=$s['sub_title'];?></h2>
                        <!-- <a><a href="#" class="btn btn-primary">View Details</a></p> -->
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-12 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                        <h3 class="heading"> Owner Kami</h3>
                            <img src="<?php echo base_url(); ?>assets/images/11.jpg" class="rounded-circle border-3 mb-4" style="width:320px; height:300px"><br>
                        <span class="align-items justify-content mt-2">
                            <h3>
                       Andreas Alessandro S.T 
                        <h6>----------------------</h6>
                        <h5>Saya memiliki impian untuk membangun infrastruktur pembangunan jauh lebih baik<br> dan penataan lingkungan dan ekosistem pembangunan yang efisien
                            <br> dengan itu menuju INDONESIA gemilang 2025</h5>
                            </h3></span>
                    </div>
                </div>
            </div>


<!--beda halaman-->
<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped">
                        </span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading"> Sewa Alat terbaik</h3>
                        <span>85% kepuasan Konsumen</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Alat Terpercaya</h3>
                        <span>Tipe Barang Terbaru</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Kualitas Terjamin</h3>
                        <span>Fungsi Alat 100% Aman</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pelayanan </h3>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section" style="margin-top:-65px;">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <!-- <span class="subheading">Featured Products</span> -->
                <h2 class="mb-4">PRODUK KAMI</h2>
				
                <p>Disini kami menyediakan beberapa tipe alat yang dapat menjadi <br>pilihan anda dalam menyesuaikan pekerjaan
                    proyek anda
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach(produk(null,null,8) as $p):?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="<?=base_url();?>detail/<?=encrypt_url($p['idproduct']);?>/<?=$p['product_seo'];?>"
                        class="img-prod"><img class="img-fluid"
                            src="<?=base_url().'uploads/products/'.$p['product_image'];?>"
                            alt="<?=$p['product_image'];?>" style="width:100%;height:200px;">
                        <?php 
							$diskon=(int)$p['diskon'];
							$harga=(int)$p['harga_jual'];
							$harga_pas=$harga-$diskon;
							$hasil=ceil(($diskon/$harga)*100); ?>
                        <?php if($p['diskon']!=0):?>
                        <span class="status">Diskon <?=$hasil.' %';?></span>
                        <?php endif;?>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a
                                href="<?=base_url();?>detail/<?=encrypt_url($p['idproduct']);?>/<?=$p['product_seo'];?>"><?=$p['product_name'];?></a>
                        </h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    <?php if($p['diskon']!=0):?>
                                    <span class="mr-2 price-dc"><?=money($p['diskon']);?></span>
                                    <?php endif;?>
                                    <span class="price-sale"><?=money($harga_pas);?></span>
                                </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="<?=base_url();?>detail/<?=encrypt_url($p['idproduct']);?>/<?=$p['product_seo'];?>"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <?php if($p['stok']!=0):?>
                                <?php if($this->session->userdata('username') && $this->session->userdata('access')=='customer'):?>
                                <input type="hidden" id="<?=$p['idproduct'];?>" name="qty" value="1">
                                <a href="#" class="buy-now-login d-flex justify-content-center align-items-center mx-1"
                                    data-produkid="<?=$p['idproduct'];?>" data-produkgambar="<?=$p['product_image'];?>"
                                    data-produknama="<?=$p['product_name'];?>" data-produkharga="<?=$harga_pas;?>"
                                    data-produksatuan="<?=$p['satuan'];?>" data-produkberat="<?=$p['berat'];?>">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <?php else:?>
                                <input type="hidden" id="<?=$p['idproduct'];?>" name="qty" value="1">
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1"
                                    data-produkid="<?=$p['idproduct'];?>" data-produkgambar="<?=$p['product_image'];?>"
                                    data-produknama="<?=$p['product_name'];?>" data-produkharga="<?=$harga_pas;?>"
                                    data-produksatuan="<?=$p['satuan'];?>" data-produkberat="<?=$p['berat'];?>">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <?php endif;?>
                                <?php endif;?>
                                <!-- <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    
<!--beda halaman-->

    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <a href="<?=base_url('public/product');?>"><span class="subheading">-- LIHAT SEMUA PRODUK KAMI
                        --</span></a>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section" style="margin-top:-65px;">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-12 heading-section text-center ftco-animate">
                <!-- <span class="subheading">Featured Products</span> -->
                <h2 class="mb-4">SOLUSI TIAP KEBUTUHAN <BR>PROYEK  ANDA</h2>
                
                <div class="row ">
				<div class="card col-6 md-6 mt-2">
                <img src="<?php echo base_url(); ?>assets/alat/traktor7.png"class="card-img-top">
                <div class="card-body">
                    <p class="card-text"><h4>Pekerjaan Tanah</h4><br><H5>
                    Kelengkapan alat berat kami, memberikan keefektifan pekerjan proyek anda 
                dalam segala bidang Kontruktor
                    </H5></p>
                </div>
                </div>

                <div class="card col-6">
                <img src="<?php echo base_url(); ?>assets/alat/traktor3.jpg"class="card-img-top">
                <div class="card-body">
                <p class="card-text"><h4>Kenyaman Pengguna</h4><br><H5>
                   Kenyamanan dan keamanan alat sewa kami akan memberikan hasil yang maksimal
                   pada pengerjaan proyek anda.
                    </H5></p>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>


<div class="container mt-12">
                <div class="text-center col-12 mb-5"> 
                <h1 class="mb-4">Nama-nama besar mempercayai kami</h1>
                <p>Berikut beberapa kategori perusahaan ternama yang <br>menjadi mitra kerja kami</p>
                </div>

    <div class="row">
            <div class="col mb-5">
                <img src="<?php echo base_url(); ?>assets/images/1.png">
            </div>
            <div class="col mb-5">
                <img src="<?php echo base_url(); ?>assets/images/3.png">
            </div>
            <div class="col mb-5">
                <img src="<?php echo base_url(); ?>assets/images/4.png">
            </div>
            <div class="col mb-5">
                <img src="<?php echo base_url(); ?>assets/images/6.png">
            </div>
</div>

<div class="hero-wrap hero-bread text-center">
    <div class="container">
    <section class="ftco-section contact-section bg-light">
    <div class="container">
            <div class="row-12">
                <?php if(empty($testi->user_id)):?>
                <div class="col">
                    <div class="container mb-4">
                        <h1 class="text-dark text-center">Testimoni Anda</h1>
                        <p class="text-center">Berikan pendapat anda, seberapa baik sistem pelayanan dan keelokan produk kammi</p>
                    </div>
                    <form action="<?=base_url('user/addTestimoni');?>" method="post" class="bg-white p-5 contact-form">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="user_id" value="<?=user()['idusers'];?>">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda"
                                value="<?=user()['user_fullname'];?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="telp" placeholder="No. Telp Anda"
                                value="<?=user()['user_telp'];?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="job" placeholder="Pekerjaan Anda" required>
                        </div>  
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                placeholder="Testimoni Anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark py-3 px-5">Add Testimoni</button>
                        </div>
                    </form>

            </div>
            <?php endif;?>
            <?php if(!empty($testi->user_id)):?>
            <div class="col-md-6 order-md-last d-flex">
                <form action="<?=base_url('user/editTestimoni');?>" method="post" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="user_id" value="<?=user()['idusers'];?>">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda"
                            value="<?=user()['user_fullname'];?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="telp" placeholder="No. Telp Anda"
                            value="<?=user()['user_telp'];?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="job" placeholder="Pekerjaan Anda" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control"
                            placeholder="Testimoni Anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary py-3 px-5">Edit Testimoni</button>
                    </div>
                </form>

            </div>
            <?php endif;?>
            <?php if(!empty($testi->user_id)):?>
            <div class="col-md-6 d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" value="<?=$testi->name;?>"
                            readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Phone" value="<?=$testi->telp;?>"
                            readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?=$testi->job;?>" readonly>
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            readonly><?=$testi->message;?></textarea>
                    </div>
                    <!-- <div class="form-group">
						<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
					</div> -->
                </form>

            </div>
            <?php endif;?>
        </div>
    </div>
</section>


<div class="hero-wrap hero-bread mt-4"style="background-image: url('<?=base_url().'views/themes/'.theme_active().'/';?>images/traktor6.jpg');">
    <div class="container">
        <div class=" text-dark row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
        
                <h1 class="mb-0 bread">DATANGKAN ALAT ANDA SEKARANG</h1> <br>   
                <p class="text-light">Login sebagai mitra untuk mendapatkan harga tawaran yang<br>menarik bagi penyewaan 
                pada Andreas Kontruktor</p><br>

                <a href="<?=base_url('auth/');?>"><button type="button mx-md-n5" class="btn btn-primary">Login</button></a>
                <a href="<?=base_url('auth/register');?>"><button type="button mx-md-n5" class="btn btn-info">Register</button></a>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section testimony-section" style="margin-top:-5px;">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <!-- <span class="subheading">Testimony</span> -->
                <h2 class="mb-4">TESTIMONI PELANGGAN</h2>
                <p>Dalam Testimoni menjadi acuan bagi kami, sebagai tahapan evaluasi perusahan untuk lebih maju dan berkembangan kedepannya.</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <?php foreach(testi() as $testi):?>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <!-- <div class="user-img mb-5"
                                style="background-image: url(<?=base_url().'views/themes/'.theme_active().'/';?>images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div> -->
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line"><?=$testi['message'];?></p>
                                <p class="name"><?=$testi['name'];?></p>
                                <span class="position"><?=$testi['job'];?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row block-9">
       
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4738.483528682608!2d104.79548202818114!3d-2.938062313727615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcb51e13d408a5028!2sGereja%20Katolik%20Santo%20Petrus%20Paroki%20Sako%20Kenten!5e0!3m2!1sid!2sid!4v1671439225598!5m2!1sid!2sid" width="1200" height="450" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>           
            </div>
        </div>
    </div>
