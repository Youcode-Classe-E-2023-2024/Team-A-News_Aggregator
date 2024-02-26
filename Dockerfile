        # Use an official base image
        FROM ubuntu:24.04

        # Set the working directory
        WORKDIR /app

        # Install Python3 and pip
        RUN apt-get update && \
            apt-get install -y python3 python3-p    ip

        # Copy your application files to the container
        COPY . /app

        # Install dependencies
        RUN pip3 install --no-cache-dir -r requirements.txt

        # Specify the command to run when the container starts
        CMD ["python3", "app.py"]

