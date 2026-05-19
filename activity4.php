<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Compilation with Form Inputs - Group Activity 4</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #34495e;
            --accent-color: #3498db;
            --success-color: #2ecc71;
            --bg-color: #f5f6fa;
            --card-bg: #ffffff;
            --text-color: #333333;
            --code-bg: #2d3436;
            --code-text: #dfe6e9;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

       
        .group-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-align: center;
            padding: 30px 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .group-header h1 {
            font-size: 2.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }

        .group-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

       
        .part-header {
            background-color: var(--accent-color);
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            margin: 40px 0 20px 0;
            font-size: 1.3rem;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

   
        .lab-card {
            background-color: var(--card-bg);
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border-left: 5px solid var(--primary-color);
        }

        .lab-title {
            color: var(--primary-color);
            font-size: 1.4rem;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
            font-weight: 600;
        }

        .lab-objective {
            font-style: italic;
            color: #7f8c8d;
            font-size: 0.95rem;
            margin-bottom: 15px;
        }


        .lab-form {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 15px;
            border: 1px solid #e2e8f0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .lab-form label {
            font-size: 0.85rem;
            font-weight: bold;
            color: var(--secondary-color);
        }

        .lab-form input, .lab-form select {
            padding: 8px 12px;
            border: 1px solid #ccd1d9;
            border-radius: 4px;
            font-size: 0.95rem;
            outline: none;
            background-color: #fff;
        }

        .lab-form input:focus, .lab-form select:focus {
            border-color: var(--accent-color);
        }

        .btn-submit {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 9px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.9rem;
            align-self: flex-end;
            transition: background 0.2s;
        }

        .btn-submit:hover {
            background-color: var(--accent-color);
        }

        .code-block {
            background-color: var(--code-bg);
            color: var(--code-text);
            padding: 15px;
            border-radius: 6px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 0.9rem;
            overflow-x: auto;
            margin-bottom: 15px;
            white-space: pre-wrap;
        }

        .output-box {
            background-color: #e1f5fe;
            border: 1px solid #b3e5fc;
            color: #01579b;
            padding: 12px 15px;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
        }
        
        .output-box::before {
            content: "➜ Result: ";
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">


        <div class="group-header">
            <h1> Activity 4</h1>
        </div>

        <div class="part-header"> PART A: PHP if Statements</div>

        <div class="lab-card">
            <div class="lab-title">Lab 1: Basic If Statement</div>
            <div class="lab-objective">Objective: Use a simple condition to verify if someone is old enough to vote.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Enter Age:</label>
                    <input type="number" name="l1_age" value="<?php echo isset($_POST['l1_age']) ? htmlspecialchars($_POST['l1_age']) : 18; ?>" required min="0">
                </div>
                <button type="submit" name="submit_l1" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$age = $_POST['l1_age'];
if ($age >= 18) {
    echo "You are eligible to vote";
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l1'])) {
                    $age = intval($_POST['l1_age']);
                    if ($age >= 18) {
                        echo "You are eligible to vote";
                    } else {
                        echo "Underage (Condition evaluation skipped default text)";
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 2: If-Else Statement</div>
            <div class="lab-objective">Objective: Sort an input value into positive or negative categories.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Enter Number:</label>
                    <input type="number" name="l2_num" value="<?php echo isset($_POST['l2_num']) ? htmlspecialchars($_POST['l2_num']) : -5; ?>" required>
                </div>
                <button type="submit" name="submit_l2" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$num = $_POST['l2_num'];
if ($num >= 0) {
    echo "Positive number";
} else {
    echo "Negative number";
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l2'])) {
                    $num = floatval($_POST['l2_num']);
                    if ($num >= 0) {
                        echo "Positive number";
                    } else {
                        echo "Negative number";
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 3: If-ElseIf Statement</div>
            <div class="lab-objective">Objective: Evaluate performance based on point spectrum boundaries.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Student Grade:</label>
                    <input type="number" name="l3_grade" value="<?php echo isset($_POST['l3_grade']) ? htmlspecialchars($_POST['l3_grade']) : 85; ?>" required min="0" max="100">
                </div>
                <button type="submit" name="submit_l3" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$grade = $_POST['l3_grade'];
if ($grade >= 90 && $grade <= 100) {
    echo "Excellent";
} elseif ($grade >= 80 && $grade <= 89) {
    echo "Good";
} elseif ($grade >= 70 && $grade <= 79) {
    echo "Average";
} else {
    echo "Failed";
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l3'])) {
                    $grade = intval($_POST['l3_grade']);
                    if ($grade >= 90 && $grade <= 100) {
                        echo "Excellent";
                    } elseif ($grade >= 80 && $grade <= 89) {
                        echo "Good";
                    } elseif ($grade >= 70 && $grade <= 79) {
                        echo "Average";
                    } else {
                        echo "Failed";
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 4: Even or Odd Checker</div>
            <div class="lab-objective">Objective: Check parity with the modulus algorithm.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Value to Check:</label>
                    <input type="number" name="l4_num" value="<?php echo isset($_POST['l4_num']) ? htmlspecialchars($_POST['l4_num']) : 7; ?>" required>
                </div>
                <button type="submit" name="submit_l4" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$num = $_POST['l4_num'];
if ($num % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l4'])) {
                    $num = intval($_POST['l4_num']);
                    if ($num % 2 == 0) {
                        echo "$num is Even";
                    } else {
                        echo "$num is Odd";
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 5: Largest of Three Numbers</div>
            <div class="lab-objective">Objective: Compare distinct variables simultaneously to filter out the maximum value.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Num 1:</label>
                    <input type="number" name="l5_n1" style="width:80px;" value="<?php echo isset($_POST['l5_n1']) ? htmlspecialchars($_POST['l5_n1']) : 12; ?>" required>
                </div>
                <div class="form-group">
                    <label>Num 2:</label>
                    <input type="number" name="l5_n2" style="width:80px;" value="<?php echo isset($_POST['l5_n2']) ? htmlspecialchars($_POST['l5_n2']) : 45; ?>" required>
                </div>
                <div class="form-group">
                    <label>Num 3:</label>
                    <input type="number" name="l5_n3" style="width:80px;" value="<?php echo isset($_POST['l5_n3']) ? htmlspecialchars($_POST['l5_n3']) : 23; ?>" required>
                </div>
                <button type="submit" name="submit_l5" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$n1 = $_POST['l5_n1']; $n2 = $_POST['l5_n2']; $n3 = $_POST['l5_n3'];
if ($n1 >= $n2 && $n1 >= $n3) {
    echo "Largest number is: " . $n1;
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    echo "Largest number is: " . $n2;
} else {
    echo "Largest number is: " . $n3;
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l5'])) {
                    $n1 = floatval($_POST['l5_n1']);
                    $n2 = floatval($_POST['l5_n2']);
                    $n3 = floatval($_POST['l5_n3']);
                    if ($n1 >= $n2 && $n1 >= $n3) {
                        echo "Largest number is: " . $n1;
                    } elseif ($n2 >= $n1 && $n2 >= $n3) {
                        echo "Largest number is: " . $n2;
                    } else {
                        echo "Largest number is: " . $n3;
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 6: Password Checker</div>
            <div class="lab-objective">Objective: Match a string target key directly to simulate structural access gates.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Enter Password:</label>
                    <input type="password" name="l6_pass" placeholder="Try admin123" required>
                </div>
                <button type="submit" name="submit_l6" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$correct_password = "admin123";
$user_input = $_POST['l6_pass'];
if ($user_input === $correct_password) {
    echo "Access Granted";
} else {
    echo "Access Denied";
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l6'])) {
                    $correct_password = "admin123";
                    $user_input = $_POST['l6_pass'];
                    if ($user_input === $correct_password) {
                        echo "Access Granted";
                    } else {
                        echo "Access Denied";
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 7: Leap Year Checker</div>
            <div class="lab-objective">Objective: Combine conditions with complex logical and/or statements.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Year:</label>
                    <input type="number" name="l7_year" value="<?php echo isset($_POST['l7_year']) ? htmlspecialchars($_POST['l7_year']) : 2024; ?>" required>
                </div>
                <button type="submit" name="submit_l7" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$year = $_POST['l7_year'];
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a Leap Year";
} else {
    echo "$year is not a Leap Year";
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l7'])) {
                    $year = intval($_POST['l7_year']);
                    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                        echo "$year is a Leap Year";
                    } else {
                        echo "$year is not a Leap Year";
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 8: Nested If</div>
            <div class="lab-objective">Objective: Place a secondary conditional gate inside an initial verified code block.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Age:</label>
                    <input type="number" name="l8_age" style="width:80px;" value="<?php echo isset($_POST['l8_age']) ? htmlspecialchars($_POST['l8_age']) : 20; ?>" required>
                </div>
                <div class="form-group">
                    <label>Citizenship:</label>
                    <select name="l8_citizen">
                        <option value="Filipino" <?php echo (isset($_POST['l8_citizen']) && $_POST['l8_citizen'] == 'Filipino') ? 'selected' : ''; ?>>Filipino</option>
                        <option value="Foreigner" <?php echo (isset($_POST['l8_citizen']) && $_POST['l8_citizen'] != 'Filipino') ? 'selected' : ''; ?>>Other</option>
                    </select>
                </div>
                <button type="submit" name="submit_l8" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$age = $_POST['l8_age']; $citizenship = $_POST['l8_citizen'];
if ($age >= 18) {
    if ($citizenship == "Filipino") {
        echo "You are eligible to vote.";
    } else {
        echo "Must be a Filipino citizen to vote.";
    }
} else {
    echo "Must be 18 or older to vote.";
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l8'])) {
                    $age = intval($_POST['l8_age']);
                    $citizenship = $_POST['l8_citizen'];
                    if ($age >= 18) {
                        if ($citizenship == "Filipino") {
                            echo "You are eligible to vote.";
                        } else {
                            echo "Must be a Filipino citizen to vote.";
                        }
                    } else {
                        echo "Must be 18 or older to vote.";
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>


        <div class="lab-card">
            <div class="lab-title">Lab 9: Discount Calculator</div>
            <div class="lab-objective">Objective: Apply conditional arithmetic adjustments based on quantitative ranges.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Purchase Amount:</label>
                    <input type="number" name="l9_amt" value="<?php echo isset($_POST['l9_amt']) ? htmlspecialchars($_POST['l9_amt']) : 1200; ?>" required>
                </div>
                <button type="submit" name="submit_l9" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$amount = $_POST['l9_amt'];
if ($amount >= 1000) {
    echo "20% discount applied.";
} elseif ($amount >= 500) {
    echo "10% discount applied.";
} else {
    echo "No discount.";
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l9'])) {
                    $amount = floatval($_POST['l9_amt']);
                    if ($amount >= 1000) {
                        echo "20% discount applied.";
                    } elseif ($amount >= 500) {
                        echo "10% discount applied.";
                    } else {
                        echo "No discount.";
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 10: Simple Login System</div>
            <div class="lab-objective">Objective: Use the logical intersection operator (`&&`) to authenticate multiple requirements.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="l10_user" style="width:120px;" placeholder="admin" required>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="l10_pass" style="width:120px;" placeholder="1234" required>
                </div>
                <button type="submit" name="submit_l10" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$username = $_POST['l10_user']; $password = $_POST['l10_pass'];
if ($username == "admin" && $password == "1234") {
    echo "Login Successful";
} else {
    echo "Invalid Username or Password";
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l10'])) {
                    $username = $_POST['l10_user'];
                    $password = $_POST['l10_pass'];
                    if ($username == "admin" && $password == "1234") {
                        echo "Login Successful";
                    } else {
                        echo "Invalid Username or Password";
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>


        <div class="part-header"> PART B: PHP switch Statements</div>

        <div class="lab-card">
            <div class="lab-title">Lab 11: Day of the Week</div>
            <div class="lab-objective">Objective: Direct integer indices cleanly to strings using switch cases.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Day Index (1-7):</label>
                    <input type="number" name="l11_day" value="<?php echo isset($_POST['l11_day']) ? htmlspecialchars($_POST['l11_day']) : 3; ?>" min="1" max="7" required>
                </div>
                <button type="submit" name="submit_l11" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$day_num = $_POST['l11_day'];
switch ($day_num) {
    case 1: echo "Monday"; break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday"; break;
    case 4: echo "Thursday"; break;
    case 5: echo "Friday"; break;
    case 6: echo "Saturday"; break;
    case 7: echo "Sunday"; break;
    default: echo "Invalid Day Number"; break;
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l11'])) {
                    $day_num = intval($_POST['l11_day']);
                    switch ($day_num) {
                        case 1: echo "Monday"; break;
                        case 2: echo "Tuesday"; break;
                        case 3: echo "Wednesday"; break;
                        case 4: echo "Thursday"; break;
                        case 5: echo "Friday"; break;
                        case 6: echo "Saturday"; break;
                        case 7: echo "Sunday"; break;
                        default: echo "Invalid Day Number"; break;
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 12: Grade Description</div>
            <div class="lab-objective">Objective: Handle alpha characters inside a basic execution pattern.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Grade Code:</label>
                    <select name="l12_letter">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                    </select>
                </div>
                <button type="submit" name="submit_l12" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$letter_grade = $_POST['l12_letter'];
switch (strtoupper($letter_grade)) {
    case 'A': echo "Excellent performance"; break;
    case 'B': echo "Good job"; break;
    case 'C': echo "Satisfactory / Average"; break;
    case 'D': echo "Needs Improvement"; break;
    case 'F': echo "Failed"; break;
    default: echo "Unknown Grade Scale"; break;
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l12'])) {
                    $letter_grade = $_POST['l12_letter'];
                    switch (strtoupper($letter_grade)) {
                        case 'A': echo "Excellent performance"; break;
                        case 'B': echo "Good job"; break;
                        case 'C': echo "Satisfactory / Average"; break;
                        case 'D': echo "Needs Improvement"; break;
                        case 'F': echo "Failed"; break;
                        default: echo "Unknown Grade Scale"; break;
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 13: Simple Calculator</div>
            <div class="lab-objective">Objective: Branch different programmatic operational algorithms instantly.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Num 1:</label>
                    <input type="number" name="l13_n1" style="width:80px;" value="<?php echo isset($_POST['l13_n1']) ? htmlspecialchars($_POST['l13_n1']) : 10; ?>" required>
                </div>
                <div class="form-group">
                    <label>Op:</label>
                    <select name="l13_op">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Num 2:</label>
                    <input type="number" name="l13_n2" style="width:80px;" value="<?php echo isset($_POST['l13_n2']) ? htmlspecialchars($_POST['l13_n2']) : 5; ?>" required>
                </div>
                <button type="submit" name="submit_l13" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$num1 = $_POST['l13_n1']; $num2 = $_POST['l13_n2']; $operator = $_POST['l13_op'];
switch ($operator) {
    case '+': echo "Result: " . ($num1 + $num2); break;
    case '-': echo "Result: " . ($num1 - $num2); break;
    case '*': echo "Result: " . ($num1 * $num2); break;
    case '/': 
        if ($num2 != 0) { echo "Result: " . ($num1 / $num2); }
        else { echo "Division by zero error."; }
        break;
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l13'])) {
                    $num1 = floatval($_POST['l13_n1']);
                    $num2 = floatval($_POST['l13_n2']);
                    $operator = $_POST['l13_op'];
                    switch ($operator) {
                        case '+': echo "Result: " . ($num1 + $num2); break;
                        case '-': echo "Result: " . ($num1 - $num2); break;
                        case '*': echo "Result: " . ($num1 * $num2); break;
                        case '/': 
                            if ($num2 != 0) {
                                echo "Result: " . ($num1 / $num2);
                            } else {
                                echo "Division by zero error.";
                            }
                            break;
                        default: echo "Invalid Operator"; break;
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 14: Menu Selection</div>
            <div class="lab-objective">Objective: Match numeric choices with interactive execution routes.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Select Menu Option:</label>
                    <select name="l14_choice">
                        <option value="1">1 = Add</option>
                        <option value="2" selected>2 = Edit</option>
                        <option value="3">3 = Delete</option>
                    </select>
                </div>
                <button type="submit" name="submit_l14" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$choice = $_POST['l14_choice'];
switch ($choice) {
    case 1: echo "Action: Adding a new record"; break;
    case 2: echo "Action: Editing an existing record"; break;
    case 3: echo "Action: Deleting a record"; break;
    default: echo "Action: Unknown selection"; break;
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l14'])) {
                    $choice = intval($_POST['l14_choice']);
                    switch ($choice) {
                        case 1: echo "Action: Adding a new record"; break;
                        case 2: echo "Action: Editing an existing record"; break;
                        case 3: echo "Action: Deleting a record"; break;
                        default: echo "Action: Unknown selection"; break;
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-title">Lab 15: Month Name Generator</div>
            <div class="lab-objective">Objective: Resolve calendar sequences directly from custom indices.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Month Index (1-12):</label>
                    <input type="number" name="l15_month" value="<?php echo isset($_POST['l15_month']) ? htmlspecialchars($_POST['l15_month']) : 5; ?>" min="1" max="12" required>
                </div>
                <button type="submit" name="submit_l15" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$month_num = $_POST['l15_month'];
switch ($month_num) {
    case 1: echo "January"; break;
    case 2: echo "February"; break;
    case 3: echo "March"; break;
    case 4: echo "April"; break;
    case 5: echo "May"; break;
    case 6: echo "June"; break;
    case 7: echo "July"; break;
    case 8: echo "August"; break;
    case 9: echo "September"; break;
    case 10: echo "October"; break;
    case 11: echo "November"; break;
    case 12: echo "December"; break;
    default: echo "Invalid Month"; break;
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l15'])) {
                    $month_num = intval($_POST['l15_month']);
                    switch ($month_num) {
                        case 1: echo "January"; break;
                        case 2: echo "February"; break;
                        case 3: echo "March"; break;
                        case 4: echo "April"; break;
                        case 5: echo "May"; break;
                        case 6: echo "June"; break;
                        case 7: echo "July"; break;
                        case 8: echo "August"; break;
                        case 9: echo "September"; break;
                        case 10: echo "October"; break;
                        case 11: echo "November"; break;
                        case 12: echo "December"; break;
                        default: echo "Invalid Month"; break;
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>


        <div class="lab-card">
            <div class="lab-title">Lab 16: Traffic Light System</div>
            <div class="lab-objective">Objective: Trigger distinct behavioral results based on a target categorical string structure.</div>
            
            <form class="lab-form" method="POST" action="">
                <div class="form-group">
                    <label>Signal Color:</label>
                    <select name="l16_color">
                        <option value="red">Red</option>
                        <option value="yellow">Yellow</option>
                        <option value="green">Green</option>
                    </select>
                </div>
                <button type="submit" name="submit_l16" class="btn-submit">Run Code</button>
            </form>

            <div class="code-block">&lt;?php
$light_color = $_POST['l16_color'];
switch (strtolower($light_color)) {
    case 'red': echo "STOP!"; break;
    case 'yellow': echo "SLOW DOWN / PREPARE TO STOP"; break;
    case 'green': echo "GO!"; break;
    default: echo "Malfunction"; break;
}
?&gt;</div>
            <div class="output-box">
                <?php
                if (isset($_POST['submit_l16'])) {
                    $light_color = $_POST['l16_color'];
                    switch (strtolower($light_color)) {
                        case 'red': echo "STOP!"; break;
                        case 'yellow': echo "SLOW DOWN / PREPARE TO STOP"; break;
                        case 'green': echo "GO!"; break;
                        default: echo "Malfunction"; break;
                    }
                } else {
                    echo "Click 'Run Code' to execute.";
                }
                ?>
            </div>
        </div>

    </div>

</body>
</html>
