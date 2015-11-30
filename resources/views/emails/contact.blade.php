<h2>Contact formulier</h2>
<table>
    <tr>
        <td>Name</td>
        <td>{{ $form->fistname }} {{ $form->lastname }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $form->email}}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{ $form->phone }}</td>
    </tr>
    <tr>
        <td>Message</td>
        <td>{{ $form->message }}</td>
    </tr>
</table>