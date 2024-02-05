<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2_Ex6</title>
    <link href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
</head>
<style>
    .container{
        width: 60%;
    }
    thead{
        width: 100%;
        background-color: green;
    }
</style>
<body>
    <?php
        $data = [
            "fruit" => [
                "apple" => "ផ្លែប៉ោម",
                "banana" => "ផ្លែចេក",
                "orange" => "ក្រូច",
                "grape" => "ផ្លែទំពាំងបាយជូរ"
            ],
            "occupation" => [
                "teacher" => "គ្រូបង្រៀន",
                "doctor" => "វេជ្ជបណ្ឌិត",
                "student" => "សិស្ស",
                "Mobile app developer" => "អ្នកអភិវឌ្ឍន៏កម្មវិធីទូរស័ព្ទ",
                "Web Developer" => "អ្នកអភិវឌ្ឍន៏កម្មវិធីវែប",
                "Data scientist" => "អ្នកវិទ្យាសាស្រ្តទិន្នន័យ"
            ],
            "courses" => [
                "Math" => "គណិតវិទ្យា",
                "English" => "អង់គ្លេស",
                "Computer" => "កុំព្យូទ័រ",
                "Physics" => "រូបវិទ្យា",
                "Biology" => "ជីវវិទ្យា",
                "Chemistry"=> "គីមីវិទ្យា"
            ]

        ];
    ?>

    <div class="container mt-5">
        <div class="table-responsive text-center">
            <table class="table table-bordered">
                <thead class="table-success">
                    <tr class="table-dark">
                        <th width=30%>Type</th>
                        <th width=30%>English</th>
                        <th width=40%>Khmer</th>
                    </tr>
                </thead>
                <?php 
                foreach($data as $type =>$d) { 
                    foreach($d as $english => $khmer) {?>
                <tbody class="table-primary">
                    <tr>
                        <td><?php echo $type ?></td>
                        <td><?php echo $english ?></td>
                        <td><?php echo $khmer ?></td>
                    </tr>
                </tbody>
                <?php
                    }
                }
                ?>
            </table>

        </div>
    </div>
</body>
</html>