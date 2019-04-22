<?php

include_once('connect/connect.php');

$atualiza_usuario = mysqli_query($conn, "		

INSERT INTO `sub_category` (`id`, `name`, `created_at`, `updated_at`, `category_id`, `price`) VALUES

(2, 'EVA (Espuma Vinílica Acetinada)', '2019-04-22 00:00:00', NULL, 1, 800),
(3, 'PE (Polietileno)', '2019-04-22 00:00:00', NULL, 1, 1620),
(4, 'PEAD (Polietileno de Alta Densidade)', '2019-04-22 16:26:28', NULL, 1, 2300),
(5, 'PEBD (Polietileno de Baixa Densidade)', '2019-04-22 16:26:28', NULL, 1, 800),
(6, 'PET (Polietileno Tereflalato)', '2019-04-22 16:26:28', NULL, 1, 800),
(7, 'Poliéster', '2019-04-22 16:29:52', NULL, 1, 250),
(8, 'PP (Polipropileno)', '2019-04-22 16:29:52', NULL, 1, 1800),
(9, 'PS (Poliestireno)', '2019-04-22 16:29:52', NULL, 1, 600),
(10, 'PVC (Policloreto de Vinila)', '2019-04-22 16:29:52', NULL, 1, 800),
(11, 'Policarbonato', '2019-04-22 16:30:56', NULL, 1, 2500)
") 
		or die(mysqli_error($conn));

		?>