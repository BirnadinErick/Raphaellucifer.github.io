<?php

include 'inc/dbconn.php';

?>


<html>
<head>
<title>PeriodicTable</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">

</head>
<body bgcolor='#d6c4c3'>
    <br />
    <br />
    <center>
        <hr />
        <table border="1" style="border-style:none;" cellspacing="0" cellpadding="10" width="70%">
            <tr>
                <td id="H" class="type3"><a href="elements/h.html">H</a></td>
                <td colspan="16" class="stype1"></td>
                <td id="He"class="type6">He</td>
            </tr>

            <tr>
                <td id="Li"class="type4">Li</td>
                <td id="Be"class="type5">Be</td>
                <td colspan="10" class="stype1"></td>
                <td id="B"class="type9">B</td>
                <td id="C"class="type3">C</td>
                <td id="N"class="type3">N</td>
                <td id="O"class="type3">O</td>
                <td id="F"class="type10">F</td>
                <td id="Ne"class="type6">Ne</td>
            </tr>

            <tr>
                <td id="Na"class="type4">Na</td>
                <td id="Mg"class="type5">Mg</td>
                <td colspan="10" class="stype1"></td>
                <td id="Al"class="type2">Al</td>
                <td id="Si"class="type9">Si</td>
                <td id="P"class="type3">P</td>
                <td id="S"class="type3">S</td>
                <td id="Cl"class="type10">Cl</td>
                <td id="Ar"class="type6">Ar</td>
            </tr>

            <tr>
                <td id="K"class="type4">K</td>
                <td id="Ca"class="type5">Ca</td>
                <td id="Sc"class="type1">Sc</td>
                <td id="Ti"class="type1">Ti</td>
                <td id="V"class="type1">V</td>
                <td id="Cr"class="type1">Cr</td>
                <td id="Mn"class="type1">Mn</td>
                <td id="Fe"class="type1">Fe</td>
                <td id="Co"class="type1">Co</td>
                <td id="Ni"class="type1">Ni</td>
                <td id="Cu"class="type1">Cu</td>
                <td id="Zn"class="type1">Zn</td>
                <td id="Ga"class="type2">Ga</td>
                <td id="Ge"class="type9">Ge</td>
                <td id="As"class="type9">As</td>
                <td id="Se"class="type3">Se</td>
                <td id="Br"class="type10">Br</td>
                <td id="Kr"class="type6">Kr</td>
            </tr>

            <tr>
                <td id="Rb"class="type4">Rb</td>
                <td id="Sr"class="type5">Sr</td>
                <td id="Y"class="type1">Y</td>
                <td id="Zr"class="type1">Zr</td>
                <td id="Nb"class="type1">Nb</td>
                <td id="Mo"class="type1">Mo</td>
                <td id="Tc"class="type1">Tc</td>
                <td id="Ru"class="type1">Ru</td>
                <td id="Rh"class="type1">Rh</td>
                <td id="Pd"class="type1">Pd</td>
                <td id="Ag"class="type1">Ag</td>
                <td id="Cd"class="type1">Cd</td>
                <td id="In"class="type2">In</td>
                <td id="Sn"class="type2">Sn</td>
                <td id="Sb"class="type9">Sb</td>
                <td id="Te"class="type9">Te</td>
                <td id="I"class="type10">I</td>
                <td id="Xe"class="type6">Xe</td>
            </tr>

            <tr>
                <td id="Cs"class="type4">Cs</td>
                <td id="Ba"class="type5">Ba</td>
                <td id="La"class="type7">La</td>
                <td id="Hf"class="type1">Hf</td>
                <td id="Ta"class="type1">Ta</td>
                <td id="W"class="type1">W</td>
                <td id="Re"class="type1">Re</td>
                <td id="Os"class="type1">Os</td>
                <td id="Ir"class="type1">Ir</td>
                <td id="Pt"class="type1">Pt</td>
                <td id="Au"class="type1">Au</td>
                <td id="Hg"class="type1">Hg</td>
                <td id="TI"class="type2">TI</td>
                <td id="Pb"class="type2">Pb</td>
                <td id="Bi"class="type2">Bi</td>
                <td id="Po"class="type9">Po</td>
                <td id="At"class="type10">At</td>
                <td id="Rn"class="type6">Rn</td>
            </tr>

            <tr>
                <td id="Fr"class="type4">Fr</td>
                <td id="Ra"class="type5">Ra</td>
                <td id="Ac"class="type8">Ac</td>
                <td id="Rf"class="type1">Rf</td>
                <td id="Db"class="type1">Db</td>
                <td id="Sg"class="type1">Sg</td>
                <td id="Bh"class="type1">Bh</td>
                <td id="Hs"class="type1">Hs</td>
                <td id="Mt"class="type1">Mt</td>
                <td id="Ds"class="type1">Ds</td>
                <td id="Rg"class="type1">Rg</td>
                <td id="cn"class="type1">cn</td>
                <td id="Nh"class="type2">Nh</td>
                <td id="FI"class="type2">FI</td>
                <td id="Mc"class="type2">Mc</td>
                <td id="Lv"class="type2">Lv</td>
                <td id="Ts"class="type10">Ts</td>
                <td id="Og"class="type6">Og</td>
            </tr>

            <tr>
                <td colspan="18" class="stype2" style="border-right-style:none;"></td>
            </tr>

            <tr>
                <td colspan="4" class="stype2"></td>
                <td id="Ce"class="type7">Ce</td>
                <td id="Pr"class="type7">Pr</td>
                <td id="Nd"class="type7">Nd</td>
                <td id="Pm"class="type7">Pm</td>
                <td id="Sm"class="type7">Sm</td>
                <td id="Eu"class="type7">Eu</td>
                <td id="Gd"class="type7">Gd</td>
                <td id="Tb"class="type7">Tb</td>
                <td id="Dy"class="type7">Dy</td>
                <td id="Ho"class="type7">Ho</td>
                <td id="Er"class="type7">Er</td>
                <td id="Tm"class="type7">Tm</td>
                <td id="Yb"class="type7">Yb</td>
                <td id="Lu"class="type7">Lu</td>
            </tr>

            <tr>
                <td colspan="4" class="stype2"></td>
                <td id="Th"class="type8">Th</td>
                <td id="Pa"class="type8">Pa</td>
                <td id="U"class="type8">U</td>
                <td id="Np"class="type8">Np</td>
                <td id="Pu"class="type8">Pu</td>
                <td id="Am"class="type8">Am</td>
                <td id="Cm"class="type8">Cm</td>
                <td id="Bk"class="type8">Bk</td>
                <td id="Cf"class="type8">Cf</td>
                <td id="Es"class="type8">Es</td>
                <td id="Fm"class="type8">Fm</td>
                <td id="Md"class="type8">Md</td>
                <td id="No"class="type8">No</td>
                <td id="Lr"class="type8">Lr</td>
            </tr>
        </table>
        <br />
        <hr />

        <table border="1" cellspacing="0" cellpadding="9" width="70%">
            <tr>
                <td id="non_metals"class="type3">Non<br>Metals</td>
                <td id="alkali_metals"class="type4">Alkali<br>Metals</td>
                <td id="alkaline_metals"class="type5">Alkaline<br>EarthMetals</td>
                <td id="transition_metals"class="type1">Transition<br>Metals</td>
                <td id="basic_metals"class="type2">Basic<br>Metal</td>
                <td id="semi_metals"class="type9">Semi<br>Metals</td>
                <td id="halogens"class="type10">Halogens</td>
                <td id="nobel_gases"class="type6">NobleGases</td>
                <td id="lanthanides"class="type7">Lanthanides</td>
                <td id="actinides"class="type8">Actinides<br></td>
            </tr>
        </table>
        <hr />
    </center>
</body>

<?php
    include 'inc/footer.php' ;
?>