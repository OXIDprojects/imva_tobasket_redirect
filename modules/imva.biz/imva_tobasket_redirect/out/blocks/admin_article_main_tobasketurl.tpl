[{$smarty.block.parent}]

    <tr>
      <td class="edittext" width="120">
        [{ oxmultilang ident='IMVA_TOBASKET_REDIRECT_DESCR'}]
      </td>
      <td class="edittext">
        <input type="hidden" name="editval[oxarticles__imva_tobasketurl]" value="0">
        <input type="text" class="editinput" size="32" name="editval[oxarticles__imva_tobasketurl]" value="[{$edit->oxarticles__imva_tobasketurl->value}]">
		[{oxinputhelp ident='IMVA_TOBASKET_REDIRECT_DESCR_HLP'}]
      </td>
    </tr>
    
    <tr>
      <td class="edittext" width="120">
        [{ oxmultilang ident='IMVA_TOBASKET_REDIRECT_REDIR'}]
      </td>
      <td class="edittext">
        <input type="hidden" name="editval[oxarticles__imva_tobasketurlact]" value="0">
        <input class="edittext" type="checkbox" name="editval[oxarticles__imva_tobasketurlact]" value='1' [{if $edit->oxarticles__imva_tobasketurlact->value == 1}]checked[{/if}] [{ $readonly }]>
      </td>
    </tr>