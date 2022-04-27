<ul class="sidebar-menu" data-widget="tree">
        <li class="header">PILIHAN UTAMA</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Dasboard</span></a></li>
        <li class="{{request()-> is('HasilPanen') ? 'active' : ''}}"><a href="/HasilPanen"><i class="fa fa-tree"></i> <span>Hasil Panen</span></a></li>
        <li class="{{request()-> is('Petani') ? 'active' : ''}}"><a href="/Petani"><i class="fa  fa-male"></i> <span>Petani</span></a></li>
        <li class="{{request()-> is('Pembeli') ? 'active' : ''}}"><a href="/Pembeli"><i class="fa  fa-money"></i> <span>Pembeli</span></a></li>
        <li class="{{request()-> is('Info_Cempaga_Farm') ? 'active' : ''}}"><a href="/Info_Cempaga_Farm"><i class="fa  fa-reorder"></i> <span>Info Cempaga Farm</span></a></li>
        <li class="treeview">