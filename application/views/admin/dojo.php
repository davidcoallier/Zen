<div id="content">
    <div class="wrap">
        <div id="main">
            <legend>Unverified Dojos</legend>
            <form action="/admin/" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Dojo</th>
                            <th>Country</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th>User</th>
                            <th><i>Verify</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dojos as $dojo){ ?>
                        <tr>
                            <td><?=$dojo->name;?></td>
                            <td><?=$dojo->country;?></td>
                            <td><?=$dojo->email;?></td>
                            <td><?=$dojo->created;?></td>
                            <td><?=$dojo->creator;?></td>
                            <td><input type="checkbox" name="dojo_id[]" value=<?=$dojo->id; ?>></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <input type="submit" name="submit" value="Verify Checked Dojos" class="btn-primary"/>
            </form>
        </div>
        <div id="sidebar">
            <div class="widget">
                <legend>Future Plans</legend>
                <p>This admin panel is still pretty raw and basic. Ideas for this include:</p>
                <ul>
                    <li>More info on the Dojo</li>
                    <li>User management (promotion, etc)</li>
                    <li>Analytics</li>
                    <li>Global alerts/messages</li>
                </ul>
            </div>
        </div>
    </div>
</div>