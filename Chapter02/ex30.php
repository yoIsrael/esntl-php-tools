$rs = $conn->execute('SELECT flavor,id FROM ice_cream');
print $rs->GetMenu('which_flavor',null,false,null,null,'class="bigselect"');
