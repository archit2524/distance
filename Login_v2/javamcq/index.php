<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
<div id="demo-top-bar">

  <div id="demo-bar-inside">

    <h2 id="demo-bar-badge">
      <a href="/">Java</a>
    </h2>

    <div id="demo-bar-buttons">
    </div>

  </div>
</div>
	<div id="page-wrap">

		<h1><font size=+4><u>M.C.Q</u></font></h1>
       
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>Which of the following option leads to the portability and security of Java?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Bytecode is executed by JVM </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) The applet makes the Java code secure and portable</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Use of exception handling</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Dynamic binding between objects</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which of the following is not a Java features?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Dynamic</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Architecture Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Use of pointers</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Object-oriented</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What should be the execution order, if a class has a method, static block, instance block, and constructor, as shown below?<br>
                        public class First_C <br>
                        {  <br>
                        public void myMethod()   <br>
                        {  <br>
                            System.out.println("Method");  <br>
                        }  <br>
                        {  <br>
                            System.out.println(" Instance Block");  <br>
                        }<br>
                        public void First_C()  <br>
                        {  <br>
                            System.out.println("Constructor ");  <br>
                        }  <br>
                        static {  
                            System.out.println("static block");  <br>
                        }  <br>
                        public static void main(String[] args)<br> 
                        {  <br>
                        First_C c = new First_C();  <br>
                        c.First_C();  <br>
                        c.myMethod();  <br>
                      }  <br>
                    } 

                    </h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Instance block, method, static block, and constructor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Method, constructor, instance block, and static block</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Static block, method, instance block, and constructor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Static block, instance block, constructor, and method</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What will be the output of the following program?<br>
                    public class MyFirst <br>
                    {  <br>
                          public static void main(String[] args) <br>
                          {  <br>
                             MyFirst obj = new MyFirst(n);  <br>
                          }  <br>
                         static int a = 10; <br> 
                         static int n;  <br>
                         int b = 5; <br> 
                         int c; <br> 
                         public MyFirst(int m) <br>
                         {  <br>
                            System.out.println(a + ", " + b + ", " + c + ", " + n + ", " + m);  <br>
                         }  <br>
                        // Instance Block  <br>
                        {  <br>
                             b = 30;  <br>
                             n = 20;  <br>
                        }   <br>
                        // Static Block  <br>
                        static   <br>
                        {  <br>
                                  a = 60;  <br>
                        }   <br>
                   }  
                   </h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 10, 5, 0, 20, 0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 10, 30, 20</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 60, 5, 0, 20</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) 60, 30, 0, 20, 0</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>The \u0021 article referred to as a</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Unicode escape sequence</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Octal escape</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Hexadecimal</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Line feed</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>_____ is used to find and fix bugs in the Java programs.</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) JVM</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) JRE</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) JDK</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) JDB</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Which of the following is a valid declaration of a char?</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A) char ch = '\utea';</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) char ca = 'tea';</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-2-answers-C">C) char cr = \u0223;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) char cc = '\itea';</label>
                    </div>
                
                </li>


             <li>
                
                    <h3>What is the return type of the hashCode() method in the Object class?</h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A">A) Object</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) int</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) long</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) void</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following is a valid long literal?</h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A">A) ABH8097</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) L990023</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) 904423</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) 0xnf029L</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>What does the expression float a = 35 / 0 return?</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A">A) 0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) Not a Number</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) Infinity</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) Run time exception</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Evaluate the following Java expression, if x=3, y=5, and z=10:
                    ++z + y - y + z + x++
                    </h3>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                        <label for="question-11-answers-A">A) 24</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                        <label for="question-11-answers-B">B) 23</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                        <label for="question-11-answers-C">C) 20</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                        <label for="question-11-answers-D">D) 25</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>What will be the output of the following program?<br>
                    public class Test <br>
                    {  <br>
                    public static void main(String[] args) <br>
                    {  <br>
                        int count = 1;  <br>
                        while (count <= 15) <br>
                        {  <br>
                            System.out.println(count % 2 == 1 ? "***" : "+++++");  <br>
                            ++count;  <br>
                        }      // end while  <br>
                    }       // end main   <br>
                    }  
                    </h3>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                        <label for="question-12-answers-A">A) 15 times ***</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                        <label for="question-12-answers-B">B) 15 times +++++</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                        <label for="question-12-answers-C">C) 8 times *** and 7 times +++++</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                        <label for="question-12-answers-D">D) Both will print only once</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following tool is used to generate API documentation in HTML format from doc comments in source code?</h3>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                        <label for="question-13-answers-A">A) javap tool</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                        <label for="question-13-answers-B">B) javaw command</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                        <label for="question-13-answers-C">C) Javadoc tool</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                        <label for="question-13-answers-D">D) javah command</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following creates a List of 3 visible items and multiple selections abled?</h3>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                        <label for="question-14-answers-A">A) new List(false, 3)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                        <label for="question-14-answers-B">B) new List(3, true)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                        <label for="question-14-answers-C">C) new List(true, 3)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                        <label for="question-14-answers-D">D) new List(3, false)</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following for loop declaration is not valid?</h3>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                        <label for="question-15-answers-A">A) for ( int i = 99; i >= 0; i / 9 )</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                        <label for="question-15-answers-B">B) for ( int i = 7; i <= 77; i += 7 )</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                        <label for="question-15-answers-C">C) for ( int i = 20; i >= 2; - -i )</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                        <label for="question-15-answers-D">D) for ( int i = 2; i <= 20; i = 2* i )</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which method of the Class.class is used to determine the name of a class represented by the class object as a String?</h3>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                        <label for="question-2-answers-A">A) getClass()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                        <label for="question-16-answers-B">B) intern()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
                        <label for="question-16-answers-C">C) getName()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />
                        <label for="question-16-answers-D">D) toString()</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>In which process, a local variable has the same name as one of the instance variables?</h3>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                        <label for="question-17-answers-A">A) Serialization</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                        <label for="question-17-answers-B">B) Variable Shadowing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                        <label for="question-17-answers-C">C) Abstraction</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                        <label for="question-17-answers-D">D) Multi-threading</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following is true about the anonymous inner class?</h3>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                        <label for="question-2-answers-A">A) It has only methods</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                        <label for="question-18-answers-B">B) Objects can't be created</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                        <label for="question-18-answers-C">C) It has a fixed class name</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />
                        <label for="question-18-answers-D">D) It has no class name</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which package contains the Random class?</h3>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                        <label for="question-19-answers-A">A) java.util package</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                        <label for="question-19-answers-B">B) java.lang package</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />
                        <label for="question-19-answers-C">C) java.awt package</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />
                        <label for="question-19-answers-D">D) java.io package</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>What do you mean by nameless objects?</h3>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                        <label for="question-20-answers-A">A) An object created by using the new keyword.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                        <label for="question-20-answers-B">B) An object of a superclass created in the subclass.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
                        <label for="question-20-answers-C">C) An object without having any name but having a reference.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />
                        <label for="question-20-answers-D">D) An object that has no reference.</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>An interface with no fields or methods is known as a ______.</h3>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />
                        <label for="question-21-answers-A">A) Runnable Interface</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
                        <label for="question-21-answers-B">B) Marker Interface</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-C" value="C" />
                        <label for="question-21-answers-C">C) Abstract Interface</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-D" value="D" />
                        <label for="question-21-answers-D">D) CharSequence Interface</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following is an immediate subclass of the Panel class?</h3>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />
                        <label for="question-22-answers-A">A) Applet class</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
                        <label for="question-22-answers-B">B) Window class</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-C" value="C" />
                        <label for="question-22-answers-C">C) Frame class</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-D" value="D" />
                        <label for="question-22-answers-D">D) Dialog class</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which option is false about the final keyword?</h3>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />
                        <label for="question-23-answers-A">A) A final method cannot be overridden in its subclasses.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
                        <label for="question-23-answers-B">B) A final class cannot be extended.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />
                        <label for="question-23-answers-C">C) A final class cannot extend other classes.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-D" value="D" />
                        <label for="question-23-answers-D">D) A final method can be inherited.</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of these classes are the direct subclasses of the Throwable class?</h3>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-A" value="A" />
                        <label for="question-24-answers-A">A) RuntimeException and Error class</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />
                        <label for="question-24-answers-B">B) Exception and VirtualMachineError class</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-C" value="C" />
                        <label for="question-24-answers-C">C) Error and Exception class</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-D" value="D" />
                        <label for="question-24-answers-D">D) IOException and VirtualMachineError class</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>What will be the output of the following program?<br>
                    abstract class MyFirstClass  <br>
                    {  <br>
                         abstract num (int a, int b) {  }  <br>
                    }</h3>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-A" value="A" />
                        <label for="question-25-answers-A">A) No error</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />
                        <label for="question-25-answers-B">B) Method is not defined properly</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-C" value="C" />
                        <label for="question-25-answers-C">C) Constructor is not defined properly</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-D" value="D" />
                        <label for="question-25-answers-D">D) Extra parentheses</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>What do you mean by chained exceptions in Java?</h3>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-A" value="A" />
                        <label for="question-26-answers-A">A) Exceptions occurred by the VirtualMachineError</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-B" value="B" />
                        <label for="question-26-answers-B">B) An exception caused by other exceptions</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-C" value="C" />
                        <label for="question-26-answers-C">C) Exceptions occur in chains with discarding the debugging information</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-D" value="D" />
                        <label for="question-26-answers-D">D) None of the above</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>In which memory a String is stored, when we create a string using new operator?</h3>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-A" value="A" />
                        <label for="question-27-answers-A">A) Stack</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-B" value="B" />
                        <label for="question-27-answers-B">B) String memory</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-C" value="C" />
                        <label for="question-27-answers-C">C) Heap memory</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-D" value="D" />
                        <label for="question-27-answers-D">D) Random storage space</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>What is the use of the intern() method?</h3>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-A" value="A" />
                        <label for="question-28-answers-A">A) It returns the existing string from memory</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-B" value="B" />
                        <label for="question-28-answers-B">B) It creates a new string in the database</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-C" value="C" />
                        <label for="question-28-answers-C">C) It modifies the existing string in the database</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-D" value="D" />
                        <label for="question-28-answers-D">D) None of the above</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following is a marker interface?</h3>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-A" value="A" />
                        <label for="question-29-answers-A">A) Runnable interface</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-B" value="B" />
                        <label for="question-29-answers-B">B) Remote interface</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-C" value="C" />
                        <label for="question-29-answers-C">C) Readable interface</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-D" value="D" />
                        <label for="question-29-answers-D">D) Result interface</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following is a reserved keyword in Java?</h3>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-A" value="A" />
                        <label for="question-30-answers-A">A) object</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-B" value="B" />
                        <label for="question-30-answers-B">B) strictfp</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-C" value="C" />
                        <label for="question-30-answers-C">C) main</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-D" value="D" />
                        <label for="question-30-answers-D">D) system</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which keyword is used for accessing the features of a package?</h3>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-A" value="A" />
                        <label for="question-31-answers-A">A) package</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-B" value="B" />
                        <label for="question-31-answers-B">B) import</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-C" value="C" />
                        <label for="question-31-answers-C">C) extends</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-D" value="D" />
                        <label for="question-31-answers-D">D) export</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>In java, jar stands for_____.</h3>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-A" value="A" />
                        <label for="question-32-answers-A">A) Java Archive Runner</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-B" value="B" />
                        <label for="question-32-answers-B">B) Java Application Resource</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-C" value="C" />
                        <label for="question-32-answers-C">C) Java Application Runner</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-D" value="D" />
                        <label for="question-32-answers-D">D) None of the above</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>What will be the output of the following program?<br>
                    public class Test2 <br>
                    {  <br>
                        public static void main(String[] args) <br>
                        {  <br>
                            StringBuffer s1 = new StringBuffer("Complete");  <br>
                            s1.setCharAt(1,'i');  <br>
                            s1.setCharAt(7,'d');  <br>
                            System.out.println(s1);  <br>
                         }  <br>
                     }
                    </h3>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-A" value="A" />
                        <label for="question-33-answers-A">A) Complete</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-B" value="B" />
                        <label for="question-33-answers-B">B) Iomplede</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-C" value="C" />
                        <label for="question-33-answers-C">C) Cimpletd</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-D" value="D" />
                        <label for="question-33-answers-D">D) Coipletd</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following is false?</h3>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-A" value="A" />
                        <label for="question-34-answers-A">A) The rt.jar stands for the runtime jar</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-B" value="B" />
                        <label for="question-34-answers-B">B) It is an optional jar file</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-C" value="C" />
                        <label for="question-34-answers-C">C) It contains all the compiled class files</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-D" value="D" />
                        <label for="question-34-answers-D">D) All the classes available in rt.jar is known to the JVM</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>What is the use of \w in regex?</h3>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-A" value="A" />
                        <label for="question-35-answers-A">A) Used for a whitespace character</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-B" value="B" />
                        <label for="question-35-answers-B">B) Used for a non-whitespace character</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-C" value="C" />
                        <label for="question-35-answers-C">C) Used for a word character</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-D" value="D" />
                        <label for="question-35-answers-D">D) Used for a non-word character</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the given methods are of Object class?</h3>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-A" value="A" />
                        <label for="question-36-answers-A">A) notify(), wait( long msecs ), and synchronized()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-B" value="B" />
                        <label for="question-36-answers-B">B) wait( long msecs ), interrupt(), and notifyAll()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-C" value="C" />
                        <label for="question-36-answers-C">C) notify(), notifyAll(), and wait()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-D" value="D" />
                        <label for="question-36-answers-D">D) sleep( long msecs ), wait(), and notify()</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Given that Student is a class, how many reference variables and objects are created by the following code?<br>
                    Student studentName, studentId;  <br>
                    studentName = new Student();  <br>
                    Student stud_class = new Student();   
                    </h3>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-A" value="A" />
                        <label for="question-37-answers-A">A) Three reference variables and two objects are created.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-B" value="B" />
                        <label for="question-37-answers-B">B) Two reference variables and two objects are created.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-C" value="C" />
                        <label for="question-37-answers-C">C) One reference variable and two objects are created.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-D" value="D" />
                        <label for="question-37-answers-D">D) Three reference variables and three objects are created.</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following is a valid syntax to synchronize the HashMap?</h3>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-A" value="A" />
                        <label for="question-38-answers-A">A) Map m = hashMap.synchronizeMap();</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-B" value="B" />
                        <label for="question-38-answers-B">B) HashMap map =hashMap.synchronizeMap();</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-C" value="C" />
                        <label for="question-38-answers-C">C) Map m1 = Collections.synchronizedMap(hashMap);</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-D" value="D" />
                        <label for="question-38-answers-D">D) Map m2 = Collection.synchronizeMap(hashMap);</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Given,
                    ArrayList list = new ArrayList();  
                    What is the initial quantity of the ArrayList list?
                    </h3>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-A" value="A" />
                        <label for="question-39-answers-A">A) 5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-B" value="B" />
                        <label for="question-39-answers-B">B) 10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-C" value="C" />
                        <label for="question-39-answers-C">C) 0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-D" value="D" />
                        <label for="question-39-answers-D">D) 100</label>
                    </div>
                
             </li>

             <li>
                
                    <h3>Which of the following is a mutable class in java?</h3>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-A" value="A" />
                        <label for="question-40-answers-A">A) java.lang.String</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-B" value="B" />
                        <label for="question-40-answers-B">B) java.lang.Byte</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-C" value="C" />
                        <label for="question-40-answers-C">C) java.lang.Short</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-D" value="D" />
                        <label for="question-40-answers-D">D) java.lang.StringBuilder</label>
                    </div>
                </li>
            </ol>
            <input type="submit" name="SubmitForm" value="Submit Quiz" />
		</form>
	</div>
	
	<style type="text/css" style="display: none !important;">
	* {
		margin: 0;
		padding: 0;
	}
	body 
    {
		overflow-x: hidden;
	}
	#demo-top-bar 
    {
		text-align: left;
		background: #222;
		position: relative;
		zoom: 1;
		width: 100% !important;
		z-index: 6000;
		padding: 20px 0 20px;
	}
	#demo-bar-inside 
    {
		width: 960px;
		margin: 0 auto;
		position: relative;
		overflow: hidden;
	}
	#demo-bar-buttons 
    {
		padding-top: 10px;
		float: right;
	}
	#demo-bar-buttons a 
    {
		font-size: 12px;
		margin-left: 20px;
		color: white;
		margin: 2px 0;
		text-decoration: none;
		font: 14px "Lucida Grande", Sans-Serif !important;
	}
	#demo-bar-buttons a:hover,
	#demo-bar-buttons a:focus 
    {
		text-decoration: underline;
	}
	#demo-bar-badge 
    {
		display: inline-block;
		width: 302px;
		padding: 0 !important;
		margin: 0 !important;
		background-color: transparent !important;
	}
	#demo-bar-badge a 
    {
		display: block;
		width: 100%;
		height: 150px;
		border-radius: 0;
		bottom: auto;
		margin: 0;
		background: url('https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/181_Java_logo_logos-128.png') no-repeat;
		background-size: 50%;
		overflow: hidden;
		text-indent: -9999px;
	}
	#demo-bar-badge:before, #demo-bar-badge:after {
		display: none !important;
	}
</style>

	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>