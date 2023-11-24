@component('mail::message')

<h1>Invitation</h1>

<p>
    You've been invited by {{ $senderName }} to join <b>Blue Bies®</b>. Use the following link to accept the invitation:
</p>

<div style="text-align:left">
    @component('mail::button', ['url' => $invitationLink])
        Accept Invitation
    @endcomponent
</div>

Thanks,<br>
<b>Blue Bies®</b>

@endcomponent
