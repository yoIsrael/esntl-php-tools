$icecream_xml =<<<XML
<icecream>
<flavor id="6">
 <name>Chocolate</name><calories>10</calories><price>4.50</price>
</flavor>
<flavor id="5">
 <name>Vanilla</name><calories>20</calories><price>4.50</price>
</flavor>
<flavor id="19">
 <name>Heavenly Hash</name><calories>60</calories><price>5.95</price>
</flavor>
<flavor id="12">
 <name>Diet Cardboard</name><calories>0</calories><price>1.15</price>
</flavor>
</icecream>
XML;
$sxe = simplexml_load_string($icecream);
