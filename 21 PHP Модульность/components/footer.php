<footer>
    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, pariatur!</h3>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore modi labore mollitia fugiat, dolor minima quidem dolore a in excepturi ratione ullam, ex eum atque amet magni asperiores voluptates consequuntur ad? Molestiae distinctio nulla atque illum delectus voluptas accusantium recusandae?</p>
    <ul>
        <?php
        foreach ($menu as $link => $description) {
            echo "<li><a href='$link'>$description</a></li>";
        }
        ?>
    </ul>
</footer>
</body>

</html>